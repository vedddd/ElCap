#include "MainWindow.hpp"
#include <QtGui>
#include <QtNetwork>
#include <QtDebug>
#include <QFileDialog>
#include <QDir>
#include <QSettings>
#include <QStackedLayout>
#include "SettingsDialog.hpp"


MainWindow::MainWindow(): isRunning(false), http(new QHttp), buffer(new QBuffer),
			  imgReqId(-1), pixItem(0), view(0) {

  QSettings settings;
  host = settings.value("host", "192.168.0.9").toString();
  
  ui.setupUi(this);

  readSettingTimer = new QTimer(this);
  connect(readSettingTimer, SIGNAL(timeout()), this, SLOT(readSettingTimeout()));

  netManager = new QNetworkAccessManager(this);

  QStackedLayout* layout = new QStackedLayout(ui.fImage);
  view = new QGraphicsView(new QGraphicsScene);
  layout->addWidget(view);
  //ui.fImage->addWidget(view);
  
  http->setHost(host, 8081);
  connect(http, SIGNAL(requestFinished(int, bool)), this, SLOT(requestFinished(int, bool)));

  init();
}

void MainWindow::init() {

  QVariantMap settings = readSettings();
  qDebug() << settings;

  int iWidth = settings["sensor_width"].toInt();
  int iHeight = settings["sensor_height"].toInt();

  for(int i = 1; iHeight / i > 319; ++i) {
    int h = iHeight / i;
    int w = iWidth / i;
    ui.cbLiveImageSize->addItem(QString::number(w) + "x" + QString::number(h), i);
  }
  isRunning = true;
  readSettingTimer->start(500);
  //  qDebug() << "ff" << QImageReader::supportedImageFormats ();
  QSettings app_settings;
   
  // add file path
  ui.leFilePath->setText(
      app_settings.value("lastPath", QDir::home().absolutePath()).toString()    
      );
  
  // add extension
  //ui.comboBoxExtension->addItem(".png");
  //ui.comboBoxExtension->addItem(".jp2");
  ui.comboBoxExtension->addItem(".jpg");
  //ui.comboBoxExtension->addItem(".bmp");
 
}

MainWindow::~MainWindow() {
  readSettingTimer->stop();
  delete readSettingTimer;
  delete http;
  delete buffer;
}

QVariantMap MainWindow::parseSettings(const QByteArray& data) {
  QVariantMap result;
  QList<QByteArray> values = data.split('\n');
  for(QList<QByteArray>::iterator i = values.begin(); i != values.end(); ++i) {
    QList<QByteArray> key_v = i->split('=');
    if(key_v.size() != 2) continue;
    result[key_v[0]] = key_v[1];//.toInt();
  }
  return result;
}

QVariantMap MainWindow::readSettings() {

  QNetworkReply* reply = netManager->get(QNetworkRequest(QUrl("http://" + host + "/elcap.php?status=1")));
  while(!reply->isFinished() && reply->error() == QNetworkReply::NoError) QCoreApplication::processEvents();
  QVariantMap settings = parseSettings(reply->readAll());
  delete reply;
  return settings;
}

void MainWindow::on_cbLiveImageSize_currentIndexChanged(int index) {
  if (! isRunning) return;
  int dcm = ui.cbLiveImageSize->itemData(index).toInt();
  setDcm(dcm);
}

void MainWindow::on_pbAcquire_clicked(bool cheked) {
  if (! isRunning) return;
  int index = ui.cbLiveImageSize->currentIndex();
  int dcm = ui.cbLiveImageSize->itemData(index).toInt();
  isRunning = false;
  setDcm(1);
  for(int i=1;true; ++i) {
    QString fn = ui.leFilePath->text() + QDir::separator() + ui.leFileName->text()
		  + QString::number(i) + ui.comboBoxExtension->currentText();
    if(QFile::exists(fn)) continue;
    QFile file(fn);
    file.open(QIODevice::WriteOnly);
    file.write(getImageData());

    break;
  }
  setDcm(dcm);
  isRunning = true;
  qDebug() << "pbAcquire_clicked";
}

// file path
void MainWindow::on_bSelectFilePath_clicked(bool checked)
{
  QString qdirectoryName = QFileDialog::getExistingDirectory(this, "Select files path", ".");
  QString directoryName = qdirectoryName;
  if(qdirectoryName=="") directoryName = ui.leFilePath->text();
  ui.leFilePath->setText(directoryName);
  
  // save file path
  QSettings settings;
  settings.setValue("lastPath", directoryName);    
}

// settings
void MainWindow::on_bSettings_clicked(bool checked)
{
  SettingsDialog dialog;
  dialog.setIpAddress(host);
  if (dialog.exec()) {
    host = dialog.ipAddress();
    QSettings settings;
    host = dialog.ipAddress();
    settings.setValue("host", host);
    http->setHost(host, 8081);
    qDebug() << dialog.ipAddress();
  }
}

// auto exposition
void MainWindow::on_cbAutoExp_stateChanged(int state) {
  setParam("autoexp_on", state == Qt::Unchecked ? 0 : 1);
}

// set exposition
void MainWindow::on_dsbExpos_valueChanged(double d) {
  //setParam("autoexp", state == Qt::Unchecked ? 0 : 1);
}

// slider exposition
void MainWindow::on_hsExpos_valueChanged(int value) {
  if(ui.cbAutoExp->isChecked()) return;
  setParam("expos", value);
}

//
void MainWindow::setParam(const QString& param, const QVariant& value) {
  QString url = "http://" + host + "/elcap.php?" + param + "=" + value.toString();
  QNetworkReply* reply = netManager->get(QNetworkRequest(QUrl(url)));
  while(!reply->isFinished() && reply->error() == QNetworkReply::NoError) QCoreApplication::processEvents();
  delete reply;
}

// image divider
void MainWindow::setDcm(int dcm) {
  QString url = "http://" + host + "/elcap.php?dcm_hor=" + QString::number(dcm) + "&dcm_vert=" + QString::number(dcm);
  QNetworkReply* reply = netManager->get(QNetworkRequest(QUrl(url)));
  while(!reply->isFinished() && reply->error() == QNetworkReply::NoError) QCoreApplication::processEvents();
  delete reply;
}

//
QByteArray MainWindow::getImageData() {
  QString url = "http://" + host + ":8081/last/wait";///torp/wait/next/save";
  QNetworkReply* reply = netManager->get(QNetworkRequest(QUrl(url)));
  while(!reply->isFinished() && reply->error() == QNetworkReply::NoError) QCoreApplication::processEvents();
  delete reply;

  url = "http://" + host + ":8081/img";
  reply = netManager->get(QNetworkRequest(QUrl(url)));
  while(!reply->isFinished()) QCoreApplication::processEvents();
  QByteArray result = reply->readAll();
  delete reply;
  return result;
}

void MainWindow::readSettingTimeout() {
  if(! isRunning) return;
  if (imgReqId == -1) getImage();

  QVariantMap settings = readSettings();
  ui.cbAutoExp->setChecked(settings["autoexp_on"] == 1);
  //  if(ui.cbAutoExp->isChecked()) 
  //  ui.hsExpos->setValue(settings["expos"].toInt());
}

void MainWindow::getImage() {
  buffer->reset();
  imgReqId = http->get("/img", buffer);
}

void MainWindow::requestFinished(int id, bool error) {
  if(id != imgReqId) return;
  imgReqId = -1;

  if(! isRunning) return;

  QImage image;
  
  image.loadFromData(buffer->buffer(), "JPG");
  QPixmap pixmap = QPixmap::fromImage(image);//.scaledToWidth (640));
  if(!pixItem) 
    pixItem = view->scene()->addPixmap(pixmap);
  else
    pixItem->setPixmap(pixmap);
  pixItem->setOffset(-pixmap.width() / 2, -pixmap.height() / 2);
  //qDebug() << "image done" << image.width();
  getImage();
}

void MainWindow::closeEvent(QCloseEvent *event)
{
  if (false) {
    event->ignore();
  } else {
    event->accept();
  }
}


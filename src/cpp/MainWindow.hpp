#ifndef MAINWINDOW_HPP
#define MAINWINDOW_HPP

#include <QtGui>
#include <QBuffer>
#include <QtNetwork>
#include "../ui_MainWindow.h"

class MainWindow : public QMainWindow
{
  Q_OBJECT
public:
  MainWindow();
  ~MainWindow();
    void fileName(const char* arg1, MainWindow* arg2);
protected:
  void closeEvent(QCloseEvent *event);
  void getImage();
  QByteArray getImageData();
  void init();
  QVariantMap parseSettings(const QByteArray& data);
  QVariantMap readSettings();
  void setDcm(int dcm);
  void setParam(const QString& param, const QVariant& value);
private Q_SLOTS:
  void requestFinished(int id, bool error);
  void readSettingTimeout();
  void on_cbLiveImageSize_currentIndexChanged(int index);
  void on_pbAcquire_clicked(bool cheked);
  void on_cbAutoExp_stateChanged(int state);
  void on_dsbExpos_valueChanged(double d);
  void on_hsExpos_valueChanged(int value);
  // test
  void on_bSelectFilePath_clicked(bool checked);
  void on_bSettings_clicked(bool checked);
  
private:
  QString host; // camera host
  bool isRunning;
  QHttp* http;
  QBuffer* buffer;
  int imgReqId;
  QGraphicsPixmapItem* pixItem;
  QGraphicsView* view;
  QTimer* readSettingTimer;
  Ui_MainWindow ui;
  QNetworkAccessManager* netManager;
};

#endif

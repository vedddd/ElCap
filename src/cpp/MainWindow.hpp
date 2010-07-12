#ifndef MAINWINDOW_HPP
#define MAINWINDOW_HPP

#include <QtGui>
#include <boost/shared_ptr.hpp>
#include <QBuffer>
#include <QtNetwork>
#include "../ui_MainWindow.h"

class MainWindow : public QMainWindow
{
  Q_OBJECT
public:
  MainWindow();
  ~MainWindow();
protected:
  void closeEvent(QCloseEvent *event);
  void getImage();
  QByteArray getImageData();
  void init();
  QVariantMap parseSettings(const QByteArray& data);
  QVariantMap readSettings();
  void setDcm(int dcm);
private Q_SLOTS:
  void requestFinished(int id, bool error);
  void readSettingTimeout();
  void on_cbLiveImageSize_currentIndexChanged(int index);
  void on_pbAcquire_clicked(bool cheked);
private:
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

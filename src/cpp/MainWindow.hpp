#ifndef MAINWINDOW_HPP
#define MAINWINDOW_HPP

#include <QtGui>
#include <boost/shared_ptr.hpp>
#include <QBuffer>
#include <QtNetwork>

class MainWindow : public QMainWindow
{
  Q_OBJECT
public:
  MainWindow();
protected:
  void closeEvent(QCloseEvent *event);
  void getImage();
private Q_SLOTS:
  void requestFinished(int id, bool error);
private:
  QHttp* http;
  QBuffer* buffer;
  int imgReqId;
  QGraphicsPixmapItem* pixItem;
  QGraphicsView* view;
};

#endif

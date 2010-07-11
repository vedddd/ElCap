#include "MainWindow.hpp"
#include <QtGui>
#include <QtNetwork>
#include <QtDebug>
 
MainWindow::MainWindow(): http(new QHttp), buffer(new QBuffer),
			  imgReqId(-1), pixItem(0), view(0) {
  view = new QGraphicsView(new QGraphicsScene, this);
  setCentralWidget(view);
  http->setHost("192.168.0.9", 8081);
  connect(http, SIGNAL(requestFinished(int, bool)), this, SLOT(requestFinished(int, bool)));
  getImage();
}

void MainWindow::getImage() {
  buffer->reset();
  imgReqId = http->get("/img", buffer);
}

void MainWindow::requestFinished(int id, bool error) {
  if(id != imgReqId) return;

  QImage image;
  
  image.loadFromData(buffer->buffer(), "JPEG");
  QPixmap pixmap = QPixmap::fromImage(image);//.scaledToWidth (640));
  if(!pixItem) 
    pixItem = view->scene()->addPixmap(pixmap);
  else
    pixItem->setPixmap(pixmap);

  qDebug() << "done" << id << "; error" << error;
  qDebug() << "imgSize" << buffer->size();
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


#include "MainWindow.hpp"
#include <QtGui>

MainWindow::MainWindow() {
}

void MainWindow::closeEvent(QCloseEvent *event)
{
  if (false) {
    event->ignore();
  } else {
    event->accept();
  }
}


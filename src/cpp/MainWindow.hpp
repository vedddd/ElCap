#ifndef MAINWINDOW_HPP
#define MAINWINDOW_HPP

#include <QDialog>
#include <boost/shared_ptr.hpp>

class MainWindow : public QDialog
{
  Q_OBJECT
public:
  MainWindow();
protected:
  void closeEvent(QCloseEvent *event);
private Q_SLOTS:
private:

};

#endif

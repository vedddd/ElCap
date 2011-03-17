#include <QApplication>
#include <QCoreApplication>
#include <QTextCodec>
#include <QtDebug>
#include "MainWindow.hpp"

int main (int argc, char *argv[])
{ 
  qDebug ("Application initialized");
	
  QApplication app (argc, argv);
  
  // QSettings
  QCoreApplication::setOrganizationName("PTRI UNN");
  QCoreApplication::setOrganizationDomain("nifti.unn.ru");
  QCoreApplication::setApplicationName("ElCap");
  
  QStringList paths = QCoreApplication::libraryPaths();
  paths.push_back(QApplication::applicationDirPath());
  QCoreApplication::setLibraryPaths (paths);
  
  QTextCodec::setCodecForTr(QTextCodec::codecForName("UTF-8"));
  QCoreApplication::setOrganizationName (QString::fromUtf8 ("Laboratory for Physics of Metals"));
  QCoreApplication::setApplicationName (QString::fromUtf8 ("ElCap"));   

  MainWindow mainwnd;
  //mainwnd.showMaximized();
  mainwnd.show();
  int ret = app.exec ();
  
  qDebug ("Application closed with code %d", ret);
  
  return ret;
}
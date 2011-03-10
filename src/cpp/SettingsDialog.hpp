#include <QtGui>
#include <QBuffer>
#include <QtNetwork>
#include "../ui_SettingsWindow.h"

class SettingsDialog : public QDialog {
  public:
    SettingsDialog(QWidget* parent = 0, Qt::WindowFlags f = 0);
    QString ipAddress() const;
    void setIpAddress(const QString& value);
  private:
    Ui_SettingsDialog ui;
};
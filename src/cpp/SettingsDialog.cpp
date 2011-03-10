#include "SettingsDialog.hpp"

SettingsDialog::SettingsDialog(QWidget* parent, Qt::WindowFlags f)
:QDialog(parent, f) {
  ui.setupUi(this);	
}

// ip address
QString SettingsDialog::ipAddress() const
{
  return ui.leIPAddress->text();
}

void SettingsDialog::setIpAddress(const QString& value)
{
  ui.leIPAddress->setText(value);
}
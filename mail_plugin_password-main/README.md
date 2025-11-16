# mail_plugin_password



Decrypt password of mail server of bitrix mail plugin
Inputs:
- PASSWORD - hash of password
- SALT - salt for hash from COption::GetOptionString("main", "pwdhashadd", "");, by default ""
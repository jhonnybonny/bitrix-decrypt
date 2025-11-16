# ldap_plugin_password



Decrypt password of ldap server of bitrix ldap plugin
Inputs:
- PASSWORD - hash of password
- SALT - salt for hash from \COption::GetOptionString('main', 'pwdhashadd', 'ldap');, by default "ldap"
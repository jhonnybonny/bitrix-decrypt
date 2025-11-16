Bitrix Password Decryptors
---
https://jhonnybonny.github.io/bitrix-decrypt/  (demo web version)

These are PHP scripts to decrypt encrypted passwords from Bitrix database for LDAP and Mail plugins. They reverse the custom encryption using MD5, XOR, and Base64.

For LDAP: Default salt is "ldap".
For Mail: Default salt is empty string "".

Run with: php index.php pass=<HASH> salt=<SALT>

Декрипторы паролей Bitrix
---
https://jhonnybonny.github.io/bitrix-decrypt/  (demo web version)

Это PHP-скрипты для дешифровки зашифрованных паролей из базы данных Bitrix для плагинов LDAP и Mail. Они обращают кастомное шифрование с помощью MD5, XOR и Base64.

Для LDAP: Соль по умолчанию "ldap".
Для Mail: Соль по умолчанию пустая строка "".

Запуск: php index.php pass=<ХЭШ> salt=<СОЛЬ>

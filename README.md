Bitrix Password Decryptors
---
https://jhonnybonny.github.io/bitrix-decrypt/  (demo web version)

These are PHP scripts to decrypt encrypted passwords from Bitrix database for LDAP and Mail plugins.

For LDAP: Default salt is "ldap".
For Mail: Default salt is empty string "".

Run with: php index.php pass=<HASH> salt=<SALT>

```
php index.php "pass=oHXp4Mxs12qd1Q==&salt="
the9ClentU
```

Декрипторы паролей Bitrix
---
https://jhonnybonny.github.io/bitrix-decrypt/  (demo web version)

Это PHP-скрипты для дешифровки зашифрованных паролей из базы данных Bitrix для плагинов LDAP и Mail.

Для LDAP: Соль по умолчанию "ldap".
Для Mail: Соль по умолчанию пустая строка "".

Запуск: php index.php pass=<ХЭШ> salt=<СОЛЬ>


```
php index.php "pass=oHXp4Mxs12qd1Q==&salt="
the9ClentU
```

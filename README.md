# ErrorMessage
Simple tool for saving error statuses for classes

How it works?

Trait ErrorMessage adds two fields to the class: 
$error - text of the error message 
$errno - error number 
It also adds functions for reading and setting these values: 
__get - reading error and errno 
ok    - indicates that there is no error at the moment, returns TRUE when called 
err   - indicate that an error occurred, specify its number and text if necessary, and throw an exception. returns FALSE when called 

The main purpose is to handle predictable, not exception, erroneous situations, such as:
- checking data
- return the execution status of the function (reading file data, verify the existence of object, etc.)

Examples of use:
1. The user opens the file verifying that the file type is not supported — return FALSE and retain the error data
2. Requesting data from the server — if there is data, we return it, if there is no data, we return FALSE and save the error (typical mysqli behavior)
3. Validation of form data
4. etc

# ErrorMessage
Простой инструмент для сохранения статусов ошибок для классов

Как это работает?

Trait ErrorMessage добавляет классу два поля: 
$error - текст сообщения об ошибке 
$errno - номер ошибки 
Он также добавляет функции для чтения и установки этих значений: 
_get - получение текста и кода ошибки 
ok   - указывает, что в данный момент ошибки нет, возвращает при вызове TRUE 
err  - указывает, что произошла ошибка, при необходимости, можно указать ее номер и текст, а также выдачу исключения. Возвращает при вызове FALSE

Основная цель состоит в том, чтобы справиться с предсказуемыми ошибочными ситуациями, а не исключениями, такими как:
- проверка данных
- возврат статуса выполнения функции (чтение данных файла, проверка наличия объекта и т.д.)

Пример использования:
1. Пользователь открывает файл, проверяя, что тип файла не поддерживается — возвращает FALSE и сохраняет данные об ошибке
2. Запрос данных с сервера — если есть данные, мы возвращаем их, если нет данных, мы возвращаем FALSE и сохраняем ошибку (типичное поведение mysqli)
3. Проверка правильности данных формы
4. и т.д.

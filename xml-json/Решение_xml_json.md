# Решение по XML

Входящие данные:
```xml
<doRegister>
   <email>olga@gmail.com</email>
   <name>Ольга</name>
   <password>1
</doRegister>
</password>
```
Перечень ошибок: 
* тег </password> закрыт не там где надо

Правильный результат:
```xml
<doRegister>
   <email>olga@gmail.com</email>
   <name>Ольга</name>
   <password>1</password>
</doRegister>
```

# Решение по JSON

Входящие данные:
```json
{
    "query": "Виктор Иван"
    "count": 7
    "parts": ("NAME", "SURNAME")
}
```
Перечень ошибок: 
* нет запятых после пары значение:ключ
* массив данных не в [], а в () скобках

Правильный результат:
```json
{
	"query": "Виктор Иван",
	"count": 7,
	"parts": ["NAME", "SURNAME"]
}
```




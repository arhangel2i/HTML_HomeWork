# Решение по XML
```xml
<!-- Не правильный вариант  -->
<doRegister>
   <email>olga@gmail.com</email>
   <name>Ольга</name>
   <password>1
</doRegister>
</password>

<!-- тег </password> закрыт не там где надо -->
<!-- Правильный вариант  -->
<doRegister>
   <email>olga@gmail.com</email>
   <name>Ольга</name>
   <password>1</password>
</doRegister>
```
# Решение по JSON
```json
//Не правильный вариант
{
    "query": "Виктор Иван"
    "count": 7
    "parts": ("NAME", "SURNAME")
}


// нет запятых после пары значение:ключ, плюс массив данных не в [], а в () скобках
//Правильный вариант
{
	"query": "Виктор Иван",
	"count": 7,
	"parts": ["NAME", "SURNAME"]
}
```




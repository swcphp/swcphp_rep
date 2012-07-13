Drupal.locale = { 'pluralFormula': function ($n) { return Number((((($n%10)==1)&&(($n%100)!=11))?(0):((((($n%10)>=2)&&(($n%10)<=4))&&((($n%100)<10)||(($n%100)>=20)))?(1):2))); }, 'strings': {"":{"Edit":"Редактировать", "Configure":"Настроить", "Done":"Готово", "Show":"Показать", "Select all rows in this table":"Отметить все строки таблицы", "Deselect all rows in this table":"Снять отметку со всех колонок таблицы", "Not published":"Не опубликовано", "Please wait...":"Пожалуйста, подождите...", "Hide":"Скрыть", "Loading":"Загрузка", "By @name on @date":"@name, @date", "By @name":"@name", "Not in menu":"Не в меню", "Alias: @alias":"Синоним: @alias", "No alias":"Синоним не задан", "New revision":"Новая редакция", "Drag to re-order":"Изменить порядок можно, перетащив пункт мышкой.", "Changes made in this table will not be saved until the form is submitted.":"Сделанные в списке изменения не вступят в силу, пока вы не сохраните их.", "The changes to these blocks will not be saved until the \u003Cem\u003ESave blocks\u003C\u002Fem\u003E button is clicked.":"Изменения, сделанные в блоках не вступят в силу пока вы не нажмете кнопку \u003Cem\u003EСохранить блоки\u003C\u002Fem\u003E.", "Show shortcuts":"Показать сочетания клавиш", "No revision":"Нет редакции", "@number comments per page":"@number комментариев на страницу", "Requires a title":"Требуется заголовок", "Not restricted":"Без ограничений", "(active tab)":"(активная вкладка)", "An AJAX HTTP error occurred.":"Возникла AJAX HTTP ошибка.", "HTTP Result Code: !status":"Полученный код HTTP: !status", "An AJAX HTTP request terminated abnormally.":"HTTP запрос AJAX завершен неправильно.", "Debugging information follows.":"Следует отладочная информация.", "Path: !uri":"Путь: !uri", "StatusText: !statusText":"СтатусТекстом", "ResponseText: !responseText":"ОтветТекстом: !responseText", "ReadyState: !readyState":"ReadyState: !readyState", "Not customizable":"Не настраиваемый", "Restricted to certain pages":"Ограничено для определённых страниц", "The block cannot be placed in this region.":"Блок не может быть размещён в этом регионе.", "Customize dashboard":"Настроить панель", "Hide summary":"Скрыть анонс", "Edit summary":"Редактировать анонс", "Don\u0027t display post information":"Не показывать информацию материала", "@title dialog":"Диалог @title", "The selected file %filename cannot be uploaded. Only files with the following extensions are allowed: %extensions.":"Выбранный файл %filename не может быть загружен. Возможно загрузка файлов только со следующими расширениями: %extensions.", "Re-order rows by numerical weight instead of dragging.":"Упорядочить строки по весу вместо перетаскивания.", "Show row weights":"Показать вес строк", "Hide row weights":"Скрыть вес строк", "Autocomplete popup":"Всплывающее автозаполнение", "Searching for matches...":"Поиск совпадений...", "Hide shortcuts":"Скрыть ярлыки"}} };
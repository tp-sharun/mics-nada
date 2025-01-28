<?php 
$lang['keyword_search_help']="<table cellpadding=&quot;0&quot; cellspacing=&quot;0&quot; class=&quot;table-grid grid-table&quot;>
<tbody>
<tr>
<td width=&quot;65&quot;><strong>Оператор</strong></td>
<td width=&quot;715&quot;><strong>Значение</strong></td>
</tr>
<tr>
<td><strong>пробел</strong></td>
<td>По умолчанию, пробелы между ключевыми словами поиска указывают на то, что эти слова выборочные. Комбинация слов в таком поиске означает <strong>ИЛИ</strong></td>
</tr>
<tr>
<td><strong>+</strong></td>
<td>Стоящий перед словом знак плюс означает <strong>И</strong></td>
</tr>
<tr>
<td><strong>-</strong></td>
<td> Стоящий перед словом знак минус означает <strong>НЕ</strong></td>
</tr>
<tr>
<td><strong>( )</strong></td>
<td>Скобки ставятся вокруг фраз для повышения их поискового рейтинга.</td>
</tr>
<tr>
<td><strong>*</strong></td>
<td>Знак звездочка используется для усечения. В отличие от других символов, звездочка ставится в конце слова или фразы (а не в начале). </td>
</tr>
<tr>
<td><strong>&quot;&quot;</strong></td>
<td> Если в начале и конце фразы стоят двойные кавычки, то такая же точно фраза будет найдена при поиске. </td>
</tr>
</tbody>
</table>

<p><br>
<strong>Примеры: </strong></p>

<ul>

<li>Несколько ключевых слов разделенных <strong>пробелами</strong>найдут исследования с любым из указанных слов. Список ключевых слов будет рассматриваться как вариации с <strong>ИЛИ</strong>. Например, слова <strong>пол возраст</strong> в описании переменных найдут все исследования со словами пол или возраст в описании переменных.<br>
<br>
</li>
<li>Знак <strong>+</strong> перед ключевым словом означает <strong>И</strong>. Например, поиск с ключевыми словами <strong> +Пол +Возраст +Трудоустройство</strong> покажет исследования со всеми этими ключевыми словами.<br>
<br>
</li>
<li>Знак <strong>-</strong> перед словом означает <strong> НЕ</strong> Например, поиск с ключевыми словами<strong> +Пол +Возраст +Трудоустройство -Кения</strong> покажет исследования, которые будут содержать слова пол, возраст и трудоустройство, но не слово Кения.<br>
<br>
</li>
<li>Фраза вокруг которой двойные кавычки <strong>&quot;&quot;</strong> оценивается как один термин. Например, чтобы найти исследования в описании которых есть фраза <em>медицинское исследование </em> ( и только в такой последовательности слов), пользователь должен напечатать в поиске  <strong> <em>&quot;</em>медицинское исследование<em>&quot;</em> </strong> с кавычками. Без кавычек поиск покажет исследования со словами медицинское или исследование. С кавычками, поиск покажет исследования только с точной фразой <em>медицинское исследование </em>.<br>
<br>
</li>
<li>Пользователи могут заменять буквы в словах или фразах звездочкой <strong> 
*</strong>. Например, слово в поиске <strong> тепл*</strong>покажет исследования со словами 
тепло, теплый, теплоотдача и т.д.<br>
<br>
</li>
<li>Знак<strong>?</strong>также может использоваться в поиске для замены букв. Например, слово в поиске <strong>труд?</strong> покажет исследования со словами труд, трудовой, трудоспособный и т.д.
<br>
<br>
</li>
</ul>
";


/* End of file search_help.php */
/* Location: ./application/language/russian/search_help.php */
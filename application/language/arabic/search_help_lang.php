<?php 
$lang['keyword_search_help']="<الجدول cellpadding = & quot؛ 0 & quot؛ تباعد الخلية = & quot؛ 0 & quot؛ class = & quot؛ جدول شبكة جدول & quot؛>
<tbody>
<tr>
<td width = & quot؛ 65 & quot؛> <strong> عامل التشغيل </ strong> </td>
<td width = & quot؛ 715 & quot؛> <strong> المعنى </ strong> </td>
</tr>
<tr>
<td> <strong> مسافة </ strong> </td>
<td> بشكل افتراضي ، تشير المسافات بين مصطلحات البحث إلى الكلمة هي
اختياري. إنه يعني <strong> أو </ strong> </td>
</tr>
<tr>
<td> <strong> + </strong> </td>
<td> تشير علامة الجمع البادئة إلى <strong> AND </strong> </td>
</tr>
<tr>
<td> <strong> - </strong> </td>
<td> تشير علامة الطرح الأولية إلى <strong> NOT </strong> </td>
</tr>
<tr>
<td> <strong> () </strong> </td>
<td> يتم وضع الأقواس (الأقواس) حول التعبيرات الفرعية لإعطاء
لهم أسبقية أعلى في البحث. </ td>
</tr>
<tr>
<td> <strong> * </strong> </td>
<td> العلامة النجمية هي عملية القطع. على عكس عوامل التشغيل الأخرى ، يتم إلحاقه بالكلمة (ضع في النهاية) ، أو جزء ، وليس مُضافًا مسبقًا (وضعه في البداية). </ td>
</tr>
<tr>
<td> <strong> & quot؛ & quot؛ </strong> </td>
<td> علامات الاقتباس المزدوجة في بداية العبارة ونهايتها ، تتطابق فقط مع الصفوف التي تحتوي على العبارة الكاملة ، كما تمت كتابتها. </ td>
</tr>
</tbody>
</table>
<p> <br>
<strong> أمثلة: </ strong> </p>

<ul>
<li> تم إدراج كلمات رئيسية متعددة في حقل مفصول بينها <strong> مسافات </ strong>
ستؤدي إلى نتائج بحث تحتوي على جميع الدراسات التي تلبي أيًا من
المعايير المكتوبة. لذلك ستتم معاملة قائمة الكلمات الرئيسية على أنها <strong> أو </ strong>
بيان . على سبيل المثال: إدراج <strong> الجنس والعمر </ strong> في وصف المتغير سيُظهر جميع الدراسات التي تحتوي على الجنس أو العمر في وصف المتغير. <br>
<br>
</li>
<li> وضع (تقديمًا مسبقًا) علامة <strong> + </strong> على البداية
من كلمة يعامل البحث على أنه عبارة <strong> AND </strong>. على سبيل المثال: <strong> + الجنس + العمر + الموظف </ strong> ستقصر النتائج على الدراسات التي تحتوي على جميع العناصر ، الجنس والعمر والموظفون فيها. <br>
<br>
</li>
<li> يؤدي وضع علامة <strong> - </strong> على بداية الكلمة (مسبقًا) إلى معاملة البحث على أنه عبارة <strong> NOT. </strong> على سبيل المثال: <strong> + Gender + Age + Employed -كينيا </ strong> ستقصر النتائج على الدراسات التي تحتوي على جميع العناصر الجنس والعمر والموظفون ، لكنها تستبعد النتائج الخاصة بكينيا من النتائج. <br>
<br>
</li>
<li> سيؤدي وضع علامات الاقتباس <strong> & quot؛ & quot؛ </strong> حول مصطلح البحث إلى تقييم المصطلح كمصطلح واحد. على سبيل المثال: لقصر البحث على أوصاف الدراسة التي تحتوي على التسلسل الدقيق للكلمات <em> دراسة صحية </ em> ، يمكنك كتابة <strong> <em> & quot؛ </em> دراسة صحية <em> & quot؛ </em> </strong> بين علامات الاقتباس. بدون علامات الاقتباس ، سيُظهر البحث جميع الدراسات المتعلقة بالصحة أو الدراسة فيها. باستخدام علامتي الاقتباس ، لن يتم عرض سوى الدراسات ذات الصياغة الدقيقة في التسلسل <em> دراسة صحية </ em>. <br>
<br>
</li>
<li> يُسمح باستبدال الأحرف في الكلمات أو العبارات بعلامة النجمة * </ strong> بدل. على سبيل المثال ، قد يؤدي البحث عن الحرارة <strong> * </strong> إلى نتائج التدفئة والتدفئة والتدفئة. <br>
<br>
</li>
<li> البدل <strong>؟ </strong> يمكن أن تستخدم أيضًا في عمليات البحث كبديل للأحرف. على سبيل المثال: البحث عن <strong> توظيف؟ </ strong> سيؤدي إلى نتائج للتوظيف أو التوظيف. <br>
<br>
</li>
</ul>";


/* End of file search_help */
/* Location: ./application/language/arabic/search_help */
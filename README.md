# MageProfis_ChildrenCategories
This module displays Children Categories of the current category.
Categories that shall be displayed and their order can be chosen via 
category attributes.
<br /><br />
"Show in parent category" => Shall current category be displayed in its parent category.<br />
"Position in parent category"   => Sort Order<br />
"category_thumbnail"            => Image to be displayed on parent category

###How to
add the following line to
catalog/category/view.phtml

<pre>
<?php echo $this->getChildHtml('category.children');?>
</pre>


<p>Die Kachen mit den Unterkategorien auf Kategorieebene werden folgendermaßen gepflegt:</p>
<ol>
<li>
Unter Katalog - > Kategorien verwalten die Elternkategorie auswählen
</li>
<li>
im Tab “Display Settings“ die Einstellung “Display Mode” auf “nur Statischen Block” oder “Statischen Block und Artikel” setzen.
</li>
<li>
Als nächstes müssen die Unterkategorien gewählt werden. Dazu bitte die Kategorie anklicken die angezeigt werden soll.
</li>
<li>
<p>Im Tab “Allgemeine Information” ganz unten gibt es 3 Attribute die für die Anzeige als Kachel entscheidend sind.</p>
<ul>
<li>
“Show in parent category” -> Wenn dieses Feld auf Ja steht wird Die Kategorie als Kachel dargestellt.
</li>
<li>
“Position in parent category” -> hier kann eine Zahl angegeben werden um die Reihenfolge der Kategorien zu bestimmen.
</li>
<li>
Miniaturbild -> Hier muss das Bild Hochgeladen werden dass angezeigt werden soll. 
</li>
</ul>
</li>
<li>
Für jede weitere Kategorie die angezgeigt werden soll muss dieser Vorgang wiederholt      werden.
</li>
</ol>

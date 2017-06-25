Responsiva bilder med LESS och &lt;figure&gt;
=============================================

På denna sida leker jag runt med bilder och visar hur de kan göras responsiva med en LESS-modul som behandlar &lt;figure&gt;-element. Jag utgår ifrån den originalet av [dbwebbisar-bilden](https://dbwebb.se/forum/viewtopic.php?f=21&t=5930) för att med hjälp av modulen CImage visa hur jag kan bearbeta bilden på server-sidan innan den skickas till webbläsaren.

[FIGURE src="image/dbwebb.jpg?w=300" caption="Här är hela bilden, skalad så att bredden är max 300 pixlar och bilden är centrerad med hjälp av figure-modulen." class="center"]

[FIGURE src="image/dbwebb.jpg?w=900&crop=2795,700,20,3750&q=100" caption="Här är en detalj utskuren ur bilden med maxbredden 900 pixlar och krav på att bilden ej ska komprimeras för att bevara kvalitén" class=""]

[FIGURE src="image/dbwebb.jpg?crop=250,350,1500,500" caption="Denna bild är utskuren och har sedan placerats med figure-modulen: .right .w25" class="right w25"]
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla ultricies nisl vitae dignissim tristique. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Praesent accumsan malesuada velit id iaculis. Donec ut pharetra eros. Nullam sagittis libero sapien, et elementum sapien molestie eget. Integer consectetur dui viverra quam rutrum, eu dignissim mauris rutrum. Fusce a metus erat. In purus erat, efficitur non lobortis laoreet, convallis vitae arcu. Nam suscipit felis magna, venenatis interdum nulla ultrices id. Phasellus egestas tellus neque, vel porta diam porta iaculis. Proin id maximus nibh. Morbi placerat diam libero, vel dapibus tellus placerat fringilla. Vestibulum semper interdum hendrerit. Etiam vel neque vel felis finibus convallis. Ut eget convallis massa.

Etiam tristique diam ut lacinia placerat. Vivamus ornare laoreet dolor, ut vehicula odio varius sit amet. Sed hendrerit, mi id ultricies maximus, justo lectus sollicitudin dui, ultrices hendrerit nunc nisl in elit. Vestibulum nec vulputate lacus. Aliquam quam neque, venenatis rutrum metus eu, luctus mollis dolor. Nulla auctor mollis venenatis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec rhoncus eget ex vel viverra. Sed rhoncus eleifend orci, commodo tincidunt massa. Nulla at sem eget elit vestibulum viverra a id nisi. Vestibulum at aliquet nibh, sed varius justo. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.

[FIGURE src="image/dbwebb.jpg?crop=400,200,1900,2000" caption="Denna bild är utskuren och har sedan placerats med figure-modulen: .left .w50" class="left w50"]
Vivamus sed placerat purus. Curabitur id sem eget velit accumsan porta. Suspendisse ac finibus nisi. Duis convallis metus urna, non mattis magna varius gravida. Curabitur et lobortis elit, in fringilla ante. Vivamus vitae accumsan ante. Fusce eu libero ex. Nullam sagittis arcu non consequat ultrices. Vestibulum mollis mi in mi imperdiet tempor.

Quisque aliquam lobortis lorem id lacinia. Quisque tempus nisl a dolor commodo, sed vestibulum felis sodales. Pellentesque vel tortor ullamcorper velit semper fermentum ac in ante. Sed ac laoreet purus, id rutrum tortor. Vivamus lacinia auctor malesuada. Pellentesque ac lacus non ante lobortis condimentum in eget leo. Morbi molestie pulvinar est, in mollis felis rutrum ut. Vivamus fringilla porttitor arcu, id tincidunt odio. Nunc odio lectus, tempor convallis sem eu, finibus varius nulla.


### Två skärmdumpar också

[FIGURE src="image/screenshot-atom.png?w=350" caption="" class="left w50"]

[FIGURE src="image/screenshot-firefox.png?w=400" caption="" class="right w50"]

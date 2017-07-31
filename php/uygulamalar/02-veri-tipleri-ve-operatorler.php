<?php

//	PHP dinamik web programlama dilidir

//	Dinamik çıktılar üretebilmemiz için, çıktıda kullanılacak verilerin değişken olması gerekir

//	Bu yüzden uygulama içinde kullanacağımız verileri PHP'de değişken olarak tanımlamamız, bir kere tanımladığımız değişkeni tekrar tekrar kullanmamız, bu değişken içindeki veride bir güncelleme olacaksa bunu değiştirmemiz mümkündür

//	PHP'de değişken tanımlamak için öncelikle dolar simgesi ($) yerleştirip değişkenin adını yazıp ardından atamayı yapmak için eşittir (=) koyup veri tipimize uygun şekilde atamamızı yapabiliriz

//	PHP'de değişken isimleri tanımlarken dikkat etmemiz gereken kurallar vardır, kimse yoktur diyemez, diyen karşısında beni bulur

/**
*	- Değişken isimleri rakam içerebilir ANCAK rakam ile başlayamaz
*	- Değişken isimleri boşluk içeremez (zaten ne münasebet)
*	- Değişken isimleri alt çizgi (_) haricinde özel karakter içeremez
*	...
*/

//	PHP'de değişkenlerde tutulabilen veri tipleri şöyledir:

/**
*	null: yoktur
*	boolean: true ya da false saklanan veri tipidir
*	string: metin veri tipidir, tek ya da çift tırnak içinde yazılır
*	integer: tam sayı veri tipidir, herhangi bir şey içine değil, doğrudan, pattadanak yazılır
*	float (double): ondalık sayı veri tipidir, yine herhangi bir şey içine değil, doğrudan, pattadanak yazılır. Ondalık kısım nokta (.) ile ayırılır. Aman diyeyim virgül koyup syntax hatası eylemeyin
*	array: dizi veri tipidir, aynı niteliğe sahip birçok verinin bir arada tutulabilmesini ve/veya farklı parametrelerden oluşan bir bütünü elemanlarını ayırarak tutabilmemizi sağlar
*	object: Nesne veri tipidir, diziler nesne tipine cast edilip o standartta kullanılabilir, ama aslında sınıflardan türetilen nesneleri barındırmak ve onun yeteneklerini kullanabilmek için tanımlanır
*	resource: Veritabanı, dosya gibi dışarıdan veri okuyacağımız zaman yarattığımız bağlantılar, PHP içinde resource tipinde bir değişken olarak tanımlanmış olur. Resource tipindeki değişkenleri PHP içinde doğrudan kullanmamız mümkün değildir. Bu kaynağı kullanarak ilgili veriyi okumamız ve uygun PHP değişken tipinde yanıt aldıktan sonra onları PHP'de kullanmamız mümkündür. Örneğin bir dosyayı açtığımızda elimizde bir kaynak olur, sonra bu kaynaktan şu kadar byte oku diyerek dosyanın içeriğini çekmiş oluruz.
*/

//	null
$maas = null;

//	boolean
$mutluMu = true;
$zenginMi = false;

//	string
$isim = 'Uğur ARICI';
$dahaUzun = "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate quis molestiae praesentium labore delectus, porro, id excepturi ducimus, perferendis facere consequuntur unde quas veniam dolore quo voluptatem eligendi voluptatibus soluta!";

//	NOT: Tek tırnakla açılıp kapatılan stringin içinde başka bir değişkene erişilemezken, çift tırnak ile tanımlanan bir stringin içinde başka bir değişkene erişilebilir

$mesaj1 = 'Benim adım $isim'; // değişkene erişilemez, çıktısı şöyle olacaktır: Benim adım $isim

$mesaj2 = "Benim adım $isim"; // değişkene erişilebilir, çıktısı şöyle olacaktır: Benim adım Uğur ARICI

//	string verilerde PHP'nin yorumlamaya çalışacağı özel karakterler barınıyorsa bunlardan kaçınmak (escape) için ters taksim (\) işareti kullanılır

$title = 'Adana\'da Güneşe Ateş Edildi';


//	integer
$yas = 19;
$sinifMevcudu = 26;
$misafir = 1;
$toplam = $sinifMevcudu + $misafir;


//	float (double)
//	NOT: PHP'de float ve double şeklinde iki farklı değişken tipi YOKTUR, olamaz, olması teklif dahi edilemez
$kucukCocukYasi = 4.5;
$iphoneFiyati = 4999.99; // sudan ucuz kank, taksitle ödersin (ÖDEYEMEDİ)


//	array
$meyveler = array("elma", "armut", "muz", "nar", "kavun", "kabak");
$sebzeler = ["biber", "patlıcan", "pırasa", "kabak", "maydanoz"];

//	PHP'de Dizi içinde kullandığımız elemanların tipi önemli değildir

$karisik = array("string", 15, 12.5, "falan", false, null, ["falan", "filanlı", "dizi"], "buraya obje de gelebilir ama daha yaratmadık", "kaynağı da koyabilirsin ama koyma kanka");

//	tanımlamasını yaptığımız dizideki her elemana 0'dan başlayıp artarak birer indis atanır
//	örneğin $meyveler dizisindeki ilk elemana erişmek istersek $meyveler[0] şeklinde erişebiliriz


//	Ancak tabii ki rahat kullanım sağlamak için dizi indislerini kendimiz atayabiliriz
$kisi = array(
	"isim" 		=> $isim,
	"dogumYili" => 1993,
	'hobileri' => ["konuşmak", 'yemek yemek', "tiyatro"],
	);

//	buradaki tüm elemanların indisini kendimiz atadığımız için bu indisler üzerinden erişebiliriz. Örn buradaki ilk eleman için $kisi['isim'] şeklinde bir kullanıma ihtiyaç duyarız

//	object

$kisiObjesi = (object)$kisi;

//	NOT: PHP'de değişken öncesine, parantez içinde başka bir tip yazarak typecasting işlemi mümkündür. Bu işlem sadece o anda kullanılırken değişkenin o tipe çevrilmesini sağlar. Kalıcı bir etki bırakmaz. Yukarıda, $kisi dizisini $kisiObjesi isimli bir nesneye çevirdik

//	Nesne içindeki değerlere (ve bir sınıftan türetilen nesnedeki metodlara erişmek için) tire büyüktür (->) kullanırız. Örneğin, yukarıdaki diziden nesneye çevrilmiş değişkende isim elemanına ulaşmak için $kisiObjesi->isim şeklinde bir kullanıma ihtiyaç duyarız

//	PHP'de nesne tipini oluşturduğumuz sınıflardan türettiğimiz nesneler için kullanırız

// örnek bir sınıf:

class Kisi
{
	var $isim;
	var $dogumYili;
	var $hobileri = [];
}

$ugur = new Kisi;
$ugur->isim = "Uğur ARICI";
$ugur->dogumYili = 1993;
$ugur->hobileri = $kisi['hobileri'];

//	yukarıda Kisi isimli sınıftan bir nesne türettik ve bunun ilgili alanlarına değerler atadık, şimdi bu nesneyi, atanmış değerleriyle kullanabiliriz

//	resource

//	NOT: Burada kaynak tipine örnek verebilmek için aynı dizindeki README.md dosyamızı fopen() fonksiyonuyla açacağız

$dosyaKaynagi = fopen("README.md", "r");


//	Matematik operatörleri
/**
*	+ (artı) : toplama yapar
*	- (eksi) : çıkarma yapar
*	* (yıldız) : çarpma yapar
*	/ (taksim) : bölme yapar
*	% (yüzde) : mod alır (ilk sayının ikinci sayıya tam bölünmemesi durumunda kalanı verir)
*/

// NOT: PHP'de matematiksel işlem yapabilmek için veri tipi şartı yoktur
//	İçinde sayı barındıran string tipinde bir değişkeni de matematiksel işleme sokabiliriz. Soldan başlayarak bulabildiği kadar rakamı alıp bunu bir sayı olarak işleme sokar, sonrasında harfler varsa dahi matematik işlemi yapılır

//	ÖRN: "3 elma" + "4 armut" işlemi 7 çıktısını verecektir
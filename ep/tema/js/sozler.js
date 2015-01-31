// Create Quotes Array
var quotes = [];

// The List of Quotes!
quotes.push({ "content": "Barış Manço", "cite": "İnsanın öğrenmesi gereken ilk dil, tatlı dildir." });        
quotes.push({ "content": "Bishop Cumberland", "cite": "Yıpranmak paslanmaktan iyidir." });            
quotes.push({ "content": "M. Longston", "cite": "Bu dünyaya hakettiği cevabı veren tek canlıdır Lama." });
quotes.push({ "content": "Albert Einstein", "cite": "Mantık sizi A'dan B'ye götürür... Hayalgücü ise her yere..." });
quotes.push({ "content": "Celâleddîn-i Rûmî", "cite": "Marifet nedir bilir misin? Taşlara bakan gözlerin çiçekleri görmesidir." });
quotes.push({ "content": "Celâleddîn-i Rûmî", "cite": "Sanmasınlar yıkıldık, sanmasınlar çöktük.! Bir başka bahar için sadece yaprak döktük..!" });
quotes.push({ "content": "Celâleddîn-i Rûmî", "cite": "Gözyaşının bile görevi varmış.. Ardından gelecek gülümseme için temizlik yaparmış..." });
quotes.push({ "content": "Celâleddîn-i Rûmî", "cite": "Aşk, düştüğü yeri yakıp kül eden ateşse; Gönül, küllerinden yeniden doğan ''mâbed''dir." });
quotes.push({ "content": "Celâleddîn-i Rûmî", "cite": "Derdi dünya olanın, dünya kadar derdi olur." });
quotes.push({ "content": "Celâleddîn-i Rûmî", "cite": "Gerek yok her sözü laf ile beyana.. Bir bakış bin söz eder bakıştan anlayana..." });
quotes.push({ "content": "Celâleddîn-i Rûmî", "cite": "Kapı açılır sen yeter ki vurmayı bil.. Ne zaman bilmem! Yeter ki; o kapıda durmayı bil.." });
quotes.push({ "content": "Celâleddîn-i Rûmî", "cite": "Kiminle gezdiğinize, Kiminle arkadaşlık ettiğinize dikkat edin...! Çünkü; Bülbül güle, karga çöplüğe götürür...!" });

var randomNumber = Math.floor(Math.random() * quotes.length);
// Alter the Current (Default) Quote Text with a Random Quote
$('#sozler i').text(quotes[randomNumber]['content']);
// Alter the Current (Default) Cite Text with a Random Quote
$('#sozler cite').text(quotes[randomNumber]['cite']);
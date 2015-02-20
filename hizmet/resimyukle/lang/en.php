<?

/* -----------------------------------------

  Chevereto - Script de hosting de imagenes
  Nightly Build 1.4
  http://www.chevereto.com/

  Released under the GPL 2.0
  Copyright (C) 2008 by Rodolfo Berrios
  <inbox at rodolfoberrios dot com>
  
  Türkçe: http://www.karaforum.com/ 2010

  ----------------------------------------- */

  /* LENGUAJE INGLES */

// TITLES
define('Hoşgeldin', 'Hoşgeldiniz');

// MENSAJES CRITICOS
define('ERROR_REF', 'Invalid access, use the home page of <a href="'.URL_SCRIPT.'" style="color: #FFF;">'.APP_NAME.'</a> to upload images.');
define('CANT_RUN', 'Impossible to upload images, Chevereto is not well configured or can not run on this server.');
define('CRITIC_ERROR_INPUT', 'Dosya Sorunlu');
define('ERROR_UPLOADING', 'Resim Yüklerken Hata İle Karşılaşıldı');

// MISC
define('ANDTEXT', 've');
define('AT', 'de');

// TITLE HTTP ERRORS
define('TITLE_400', 'Kötü İstek (400)');
define('TITLE_401', 'Yetkiniz yok (401)');
define('TITLE_403', 'Erişim engellendi (403)');
define('TITLE_404', 'Aradığınız bulunamadı (404)');
define('TITLE_500', 'Sunucu hatası (500)');
define('TITLE_503', 'Servis yok (503)');
// DESC HTTP ERRORS
define('DESC_400', 'Sunucu isteğinizi algılayamadı.');
define('DESC_401', 'Sayfaya girmek için kullanıcı adı ve şifre gerekiyor.');
define('DESC_403', 'Erişim engellendi.');
define('DESC_404', 'Aradığınız sayfa bulunamıyor.');
define('DESC_500', 'Beklenmedik bir hata yaşandı. Özür dileriz.');
define('DESC_503', 'Geçiçi olarak devre dışı. Özür dileriz.');
// ACCESO A DIRECTORIOS
define('TITLE_DIR_NO', 'Erişim engellendi."'.$page.'"');
define('DESC_DIR_NO', 'Üzgünüz, doğrudan bu dizine erişilemiyor.');

// SPLIT ERRORS + SPLIT TITLES
define('FORM_INCOMPLETE', 'Resim Seçmediniz!');
define('TITLE_FORM_INCOMPLETE', 'Form eksik!');
define('DOBLE_POSTED', 'Gönderdiğiniz Link Hatalı!');
define('FATAL_ERROR_TITLE', 'Önemli Hata!');
define('INVALID_EXT', 'Yüklenebilir Formatlar JPG, PNG, GIF ve BMP');
define('INVALID_TITLE', 'Dosya Biçimi Geçersiz');
define('INVALID_CORRUPT', 'Geçersiz veya bozuk dosya!');
define('NOTHING_TO_RESIZE', 'Boyutlandırmak için boyut giriniz!');
define('INPUT_ERROR', 'Giriş Hatası!');
define('NO_ID', 'Birşey belirtmediniz!');
define('NO_ID_TITLE', 'Resim yok!');
define('NO_SELF_UPLOAD', 'Resim sunucuya yüklenemiyor.');
define('CANT_UPLOAD_TITLE', 'Resim yüklenemiyor.');
define('TOO_HEAVY', 'Dosya çok büyük!');
define('JUST_NUMBERS', 'JSadece istenen genişliğin sayısal değerini girin.');
define('UPLOADED_BUT_NOT_RESIZED', 'Geçersiz!');
define('OVER_RESIZE_ERROR', 'Boyutlandırma geçersiz!');
define('RESIZE_LIMITS', 'Geçersiz!');

// INPUT TEXT
define('ENTER_WIDTH', 'Resminizin istenen genişliğini girin.');

// OK MESSAGES
define('UPLOAD_OK', 'Resim başarıyla yüklendi!');
define('UPLOAD_AND_RESIZED', 'Resim başarıyla boyutlandırıldı!');

// VIEWVING
define('SEEING', 'Resmi görüntüle');
define('NOT_EXISTS', 'Resim yok!');
define('NOT_EXISTS_TITLE', 'Resim yok!');
define('FULL_SIZE', 'Tam boy');

// TXT
define('TXT_PREFERENCES', 'Link Kısalt');
define('TXT_TINYURL', 'Linki Kısaltmak İçin Kutucuğu İşaretleyin');
define('TXT_CLOSE_PREF', 'İptal Et');
define('TXT_LOCAL', 'Yüklemek İstediğiniz Resmi Bilgisayarınızdan Seçiniz');
define('TXT_REMOTE', ' <abbr title="http://where-is-the-image.com/image.jpg"></abbr>Herhangi Bir Resim Urlsinden Yükleme Yapın');
define('TXT_UPLOADING', 'Resim Yükleniyor...');
define('TXT_REMOTE_RR', '<abbr title="http://where-is-the-image.com/image.jpg">url</abbr> Herhangi Bir Resim Urlsinden Yükleme Yapın');
define('TXT_TEMP_SAVE', 'Burada <span>tekrar</span> boyutlandırabilirsiniz.');
define('TXT_REZ_AGAIN', 'Resim Boyutlandırılıyor...');
define('TXT_TEMP_PLACE', 'Burada <span>orjinal boyutunu</span> görebilirsiniz.');
define('TXT_SEEING', 'Görüntüleniyor');
define('TXT_AND_RESIZE', 'Ufaltıldı');
define('TXT_DID', 'Yüklenen Resim');
// SHARE
define('SHARE_THUMB_VIEWER', 'Önizleme + <u>Görüntü</u> linki');
define('SHARE_FORUMS', 'Forum Linki');
define('SHARE_DIRECT', 'Direk Linkler');
define('SHARE_VIEWER', 'Görüntüle');
define('SHARE_SOCIAL', 'Resmi Sosya Ağlara Ekleyim');
define('SHARE_NETWORKS', 'Sosyal Ağlar');
define('SHARE_TWITTER', 'Twitt ekle');
define('SHARE', 'Linkler');
// RESIZE
define('RESIZE_DSC', 'Resmi Otomatikman Boyutlandırın');
define('RESIZE_WIDTH', 'Boyutu Giriniz');
define('RESIZE_PIXELS', 'Pixel Olarak');
define('RESIZE_KEEP', '*Örneğin 800 px');

?>
# MicroSec
Security Training Web Platform with Docker

#Kurulum

  1. Linux tabanlı işletim sisteminize *Docker'ın ve SSH'ın* kurulu olduğunda emin olun.
  
  2. Setup klasörü içerisinde bulunan **kurulum.sh** dosyasını **root** yetkileri ile çalıştırın ve kurulumu bekleyin.
  
  3. Kurulum bittikten sonra :
    1.  `sudo groupadd docker`
    2.  `sudo usermod -aG docker $USER`
    3.  `reboot`
  Komutlarını sırası ile çalıştırın. Reboot işleminden sonra Docker, root yetkileri istemeden çalışacaktır.
  Emin olmak için konsola `docker images` yazarak yetkilendirme hatasını çıkıp çıkmadığına bakın. Zaafiyetli labların imaajları gözükecektir.
  
  4. Setup klasörü içerisindeki *start.sh ve stop.sh* dosyalarını -- /home/$USER -- dizininin altına taşıyın.
  
  5. /infosec/public_html/ içerisindeki *open.php ve close.php* dosyaları içerisindeki :
        1. ssh2_connect fonksiyonu içerisinde bulunan IP adresi yerine host makinenizin ip adresni yazınız.
        2. ssh2_auth() içerisindeki "deneme" yerine linux kullanıcı adınızı, "123" yerine root şifrenizi yazınız.
    
  6. infosec klasöründeki **docker-compose.yml** dosyasını terminal ekranına (docker-compose dosyası ile aynı ortamda çalıştımalısınız) `docker-compose up` yazarak çalıştırın ve kurulumu bekleyin.

  7. localhost:80 adresine gidin. 403 hata kodu ile karşılaşırsanız yeni bir terminal açarak `docker exec -it php-apache chmod 755 /var/www/html` yazın ve tekrar deneyin.
  
  8. localhost:8000 adresinde giderek (username : root  password : rootpassword) aşağıdaki fotoğraf adımlarını izleyerek veri tabanınızı oluşturun. 
  
        1. ![1](https://user-images.githubusercontent.com/58151582/130284725-4153c120-3210-4eee-bc63-a3cee73c9675.png)
    
        2. ![2](https://user-images.githubusercontent.com/58151582/130284747-5c6e5e3d-bbed-4f3d-94ca-82fbac789092.png)
 
        3. ![3](https://user-images.githubusercontent.com/58151582/130284787-932e788e-ea6f-482f-b519-0bbb1392873e.png)
  
  9. localhost:80 adresine giderek *create account* butonunundan yeni hesap oluşturun.
  
  10. Projenin tadını çıkarın :)

#İletişim

Docker ve proje ile ilgili yaşadığınız problemler ve merak ettikleriniz için :
  1. Berkant DEMİRCİ    ==>     email : berkantdemirci1905@gmail.com   --   instagram : berkant.py

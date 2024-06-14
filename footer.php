<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Footer</title>

<style>
    /* footer */

footer{
    bottom: 0;
    left: 0;
    right: 0;
    background: #323232;
    height: auto;
    width: 100%;
    padding-top: 5px;
    color: #fff;
}
.footer-content{
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
    text-align: center;
    padding: 5px;
}
.footer-content h3{
    font-size: 2.1rem;
    font-weight: 500;
    text-transform: capitalize;
    line-height: 3rem;
}
.footer-content p{
    max-width: 500px;
    margin: 10px auto;
    line-height: 28px;
    font-size: 14px;
    color: #cacdd2;
}
.socials{
    list-style: none;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 1rem 0 3rem 0;
}
.socials li{
    margin: 0 10px;
}
.socials a{
    text-decoration: none;
    color: #fff;
    border: 1.1px solid white;
    padding: 5px;
    border-radius: 50%;

}
.socials a i{
    font-size: 1.1rem;
    width: 20px;
    transition: color .4s ease;

}
.socials a:hover i{
    color: var(--text-color);
}

.footer-bottom{
    background: var(--main-coloer);
    width: 100%;
    padding: 20px;
    padding-bottom: 40px;
    text-align: center;
}
.footer-bottom p{
    float: center;
    font-size: 14px;
    word-spacing: 2px;
    text-transform: capitalize;
}
.footer-bottom p a{
  color:var(--text-color);
  font-size: 16px;
  text-decoration: none;
}
.footer-bottom span{
    text-transform: uppercase;
    opacity: .4;
    font-weight: 200;
}
.footer-menu{
  float: right;

}
.footer-menu ul{
  display: flex;
}
.footer-menu ul li{
padding-right: 10px;
display: block;
}
.footer-menu ul li a{
  color: #cfd2d6;
  text-decoration: none;
}
.footer-menu ul li a:hover{
  color: var(--text-color);
}

@media (max-width:500px) {
.footer-menu ul{
  display: flex;
  margin-top: 10px;
  margin-bottom: 20px;
}
}
</style>
</head>
<body>
    
</body>
<!-- footer index -->
<footer>
        <div class="footer-content">
            <p>Alamat: Jl. Puser Jaya, Karawang, PJawa Barat, 41161</p>
            <p>Telp: (+62) 895-3320-73462 | Email: skillhive@unsika.ac.id</p>
            <!-- <ul class="socials">
                <li><a href="https://www.facebook.com/panda.christian.9?mibextid=ZbWKwL"><i class="fa fa-facebook"></i></a></li>
                <li><a href="https://youtube.com/@pandasitorus1958?si=g2Bk7JWxUIfMityi"><i class="fa fa-youtube"></i></a></li>
                <li><a href="https://www.linkedin.com/in/pandapotan-kristian-sitorus-9662612a1?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app" target="_blank"><i class="fa fa-linkedin-square"></i></a></li>
            </ul> -->
        </div>
        <div class="footer-bottom">
            <p>copyright &copy; <a href="#">SkillHive Developer</a>  </p>
        </div>
    </footer>
</html>
CREATE TABLE user_profile (
  id INT NOT NULL AUTO_INCREMENT,

  imageUser VARCHAR(255) NOT NULL,

  fullNameUser VARCHAR(255) NOT NULL UNIQUE,

  countryCodeUser ENUM('880'),

  mobile_numberUser VARCHAR(255) NOT NULL UNIQUE,
  
  genderUser ENUM('male', 'female'),

  gradeUser ENUM('eleven', 'twelve', 'modelTest', 'admission'),

  religionUser ENUM('islam', 'hinduism', 'christianity', 'buddhism', 'other'),

  districtUser ENUM('bagerhat','bandarban','barguna','barisal','bhola','bagerhat','bagerhat','bagerhat','bogra','brahmanbaria','chandpur','chapainawabganj','chittagong','chuadanga','coxsBazar','cumilla','dhaka','dinajpur','faridpur','feni','gaibandha','gazipur','gopalganj','habiganj','jamalpur','jessore','jhalokathi','jhenaidah','joypurhat','khagrachhari','khulna','kishoreganj','kurigram','kushtia','lakshmipur','lalmonirhat','madaripur','magura','manikganj','meherpur','moulvibazar','munshiganj','mymensingh','naogaon','narail','narayanganj','narsingdi','natore','netrokona','nilphamari','noakhali','pabna','panchagarh','patuakhali','pirojpur','rajbari','rajshahi','rangamati','rangpur','satkhira','shariatpur','sherpur','sirajganj','sunamganj','sylhet','tangail','thakurgaon'),

  emailUser VARCHAR(255) NOT NULL UNIQUE,
  passwordUser VARCHAR(255) NOT NULL


  created_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
  updated_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,


  PRIMARY KEY (id)
);
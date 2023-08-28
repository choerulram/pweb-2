<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inheritance</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/main.css">
</head>
<body>
    <form action="" method="post">
        <div class="container border w-25 p-5 mt-25 bg-light rounded">
            <?php 
                class manusia {
                    public $nama_saya;
                    protected $name_pet;
                    private $age_pet;
                
                    public function panggil_nama($saya) {
                        $this->nama_saya = $saya;
                    } // function panggil_nama

                    protected function panggil_pet($name, $age) {
                        $this->name_pet = $name;
                        $this->age_pet = $age;
                    } // function panggil_pet

                    // metode public untuk mengambil nilai dari properti private $age_pet
                    public function getAgePet() {
                        return $this->age_pet;
                    }
                } // class manusia

                // last turunan / sub last dari manusia
                class mahasiswa extends manusia {
                    public $nama_mahasiswa;
                    
                    public function panggil_mahasiswa($mahasiswa) {
                        echo "CLASS Mahasiswa : <br>";
                        $this->nama_mahasiswa = $mahasiswa;
                    }
                }

                // last turunan / sub last dari manusia
                class pet extends manusia {
                    public function panggil_hewan($name, $age) {
                        $this->panggil_pet($name, $age);
                    }

                    public function tampilkan_hewan() {
                        echo "CLASS Pet : <br>";
                        return "Nama Hewan: " . $this->name_pet . "<br>Umur Hewan: " . $this->getAgePet();
                    }
                } 

                // instansiasi class mahasiswa
                $mhs = new mahasiswa;
                $mhs->panggil_nama("Achmad");
                $mhs->panggil_mahasiswa("Choerul");

                // instansiasi class pet
                $hewan = new pet;
                $hewan->panggil_hewan("Kucing", 3);

                // tampilkan property yang dilindungi dan publik
                echo "Nama depan : " . $mhs->nama_saya . "<br>";
                echo "Nama belakang : " . $mhs->nama_mahasiswa . "<br><br>";
                echo $hewan->tampilkan_hewan();
                
            ?>
        </div>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>

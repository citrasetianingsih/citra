<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
class JurusanTeknologiInformasi {
    private $namaMahasiswa;
    private $programStudi;
    public function __construct($namaMahasiswa, $programStudi) {
        $this->namaMahasiswa = $namaMahasiswa;
        $this->programStudi = $programStudi;
    }
    public function getInfo() {
        return "Nama Mahasiswa: " . $this->namaMahasiswa . ", Program Studi: " . $this->programStudi;
    }
        public function setNamaMahasiswa($namaMahasiswa) {
        $this->namaMahasiswa = $namaMahasiswa;
    }
    public function setProgramStudi($programStudi) {
        $this->programStudi = $programStudi;
    }
}
$mahasiswa1 = new JurusanTeknologiInformasi("Citra Sopti Setianingsih", "Manajemen Informatika");
echo $mahasiswa1->getInfo();
$mahasiswa1->setNamaMahasiswa("Citra Sopti Setianingsih");
$mahasiswa1->setProgramStudi("Manajmen Informatika");
echo "<br>" . $mahasiswa1->getInfo();

?>
</body>
</html>
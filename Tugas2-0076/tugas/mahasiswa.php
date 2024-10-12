<?php
    class mahasiswa
    {
        var $nama;
        var $nim;
        var $kelas;
        var $ipk;
        var $jurusan;

        function __construct(String $nama, $nim, $kelas, $ipk, $jurusan)
        {
            $this->nama = $nama;
            $this->nim = $nim;
            $this->kelas = $kelas;
            $this->ipk = $ipk;
            $this->jurusan = $jurusan;
        }

        function infomahasiswa()
        {
            return "$this->nama, $this->nim, $this->kelas, $this->ipk, $this->jurusan;";
        }
    }
?>
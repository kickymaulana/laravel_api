<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        $firstNames = [
            'Agus', 'Ahmad', 'Andi', 'Bambang', 'Budi', 'Dedi', 'Deni', 'Dwi',
            'Edi', 'Fajar', 'Gunawan', 'Hendra', 'Heru', 'Hadi', 'Imam', 'Joko',
            'Kurniawan', 'Made', 'Mulyadi', 'Nurhadi', 'Putra', 'Rudi', 'Sapto',
            'Sugeng', 'Supriyadi', 'Taufik', 'Tri', 'Wahyu', 'Wibowo', 'Yudi',
            'Adi', 'Agung', 'Anto', 'Arif', 'Bagus', 'Bayu', 'Candra', 'Cecep',
            'Darma', 'Dede', 'Dodi', 'Eko', 'Erwin', 'Faisal', 'Farid', 'Ganda',
            'Ganjar', 'Gede', 'Guntur', 'Habib', 'Hamid', 'Hari', 'Hasan', 'Heri',
            'Hermawan', 'Iman', 'Indra', 'Irfan', 'Irwan', 'Iskandar', 'Iwan',
            'Johan', 'Kadek', 'Kardi', 'Ketut', 'Komang', 'Kusnadi', 'Kusumo',
            'Lukman', 'Maman', 'Mulyono', 'Munawar', 'Nurdin', 'Puji', 'Purwanto',
            'Raharjo', 'Rahmat', 'Ramli', 'Rianto', 'Ridwan', 'Rohman', 'Rustam',
            'Saiful', 'Slamet', 'Sofyan', 'Suherman', 'Sukirman', 'Sulaiman',
            'Sumardi', 'Sumarno', 'Sunarto', 'Supardi', 'Suparman', 'Supratman',
            'Supriatna', 'Suratman', 'Suryadi', 'Susanto', 'Sutikno', 'Sutrisno',
            'Suyatno', 'Syamsul', 'Tatang', 'Teguh', 'Tono', 'Triyono', 'Umar',
            'Untung', 'Usman', 'Waluyo', 'Warsono', 'Widodo', 'Wijaya', 'Wiyono',
            'Yanto', 'Yulianto', 'Zaenal', 'Zainal', 'Aditya', 'Alfian', 'Alwi',
            'Ananda', 'Angga', 'Ari', 'Arya', 'Aziz', 'Basuki', 'Cahyadi',
            'Danang', 'Darmawan', 'Dian', 'Dimas', 'Doni', 'Effendi', 'Endra',
            'Erlangga', 'Fadhil', 'Firmansyah', 'Ginanjar', 'Hafidz', 'Hakim',
            'Halim', 'Hamzah', 'Handoko', 'Haris', 'Hartono', 'Haryanto',
            'Hidayat', 'Hilman', 'Ihsan', 'Ilham', 'Iswanto', 'Jamal', 'Jamil',
            'Jati', 'Junaedi', 'Kurnia', 'Lukito', 'Lutfi', 'Mansur', 'Maulana',
            'Miftah', 'Muhsin', 'Mukhlis', 'Mulyadi', 'Munir', 'Nabil',
            'Nasrullah', 'Nugroho', 'Nur', 'Nurcahyo', 'Nurhasan', 'Pamungkas',
            'Prabowo', 'Pradana', 'Pramono', 'Prasetya', 'Prasetyo', 'Prayitno',
            'Purwadi', 'Purwoko', 'Rahadian', 'Rahmad', 'Rahmawan', 'Rama',
            'Ramadhan', 'Rasyid', 'Rendra', 'Reza', 'Rian', 'Rinaldi', 'Rizki',
            'Rizky', 'Romadhon', 'Roni', 'Rudy', 'Ruslan', 'Rusli', 'Sabar',
            'Salim', 'Sandi', 'Santosa', 'Santoso', 'Saputra', 'Sarifudin',
            'Satria', 'Setya', 'Setyawan', 'Setyo', 'Siswanto', 'Soleh',
            'Solihin', 'Subandi', 'Subekti', 'Sudarsono', 'Sudibyo', 'Sudirman',
            'Sudrajat', 'Sugiarto', 'Sugiyanto', 'Suhardi', 'Suhartono',
            'Suhendra', 'Sujatmiko', 'Sukardi', 'Sukoco', 'Sulistyo', 'Surya',
            'Suryana', 'Suryanto', 'Suryono', 'Susilo', 'Sutopo', 'Suwandi',
            'Suwardi', 'Suwarto', 'Syahputra', 'Syahril', 'Syamsudin', 'Syarif',
            'Taufan', 'Taufiq', 'Tejo', 'Timbul', 'Tirta', 'Tohari', 'Toto',
            'Triyadi', 'Tukiman', 'Tulus', 'Ucok', 'Udin', 'Unggul', 'Utama',
            'Utomo', 'Wahid', 'Wahyudi', 'Wahyudin', 'Wandi', 'Wawan', 'Wayan',
            'Wibawa', 'Wibisono', 'Widura', 'Wiguna', 'Wirawan', 'Wisnu',
        ];

        $lastNames = [
            'Pratama', 'Wijaya', 'Kusuma', 'Santoso', 'Saputra', 'Purnomo',
            'Hidayat', 'Siregar', 'Nasution', 'Saragih', 'Simanjuntak',
            'Situmeang', 'Sinaga', 'Sihombing', 'Siahaan', 'Napitupulu',
            'Sitepu', 'Panggabean', 'Situmorang', 'Sianturi', 'Tamba',
            'Manurung', 'Simatupang', 'Sidabutar', 'Rajagukguk', 'Simbolon',
            'Hutapea', 'Hutagalung', 'Siregar', 'Siagian', 'Silitonga',
            'Samosir', 'Sibarani', 'Silalahi', 'Simarmata', 'Simamora',
            'Sianipar', 'Tampubolon', 'Panjaitan', 'Pakpahan', 'Nainggolan',
            'Saragih', 'Tarigan', 'Ginting', 'Karokaro', 'Peranginangin',
            'Pinem', 'Barus', 'Sebayang', 'Brahmana', 'Purba', 'Damanik',
            'Samosir', 'Sidabutar', 'Simanjuntak', 'Sitohang', 'Sitorus',
            'Sianturi', 'Togatorop', 'Siagian', 'Sinambela', 'Hutahaean',
            'Naibaho', 'Butarbutar', 'Sitanggang', 'Tarihoran', 'Sipahutar',
            'Siahaan', 'Sihite', 'Simangunsong', 'Sitinjak', 'Siburian',
            'Simaremare', 'Sidabalok', 'Siadari', 'Sinurat', 'Sindoro',
            'Prawira', 'Kusumah', 'Wibisana', 'Nugraha', 'Pamungkas',
            'Cahyono', 'Wardhana', 'Soedirman', 'Hadikusumo', 'Notonegoro',
            'Cakrawala', 'Prabaswara', 'Widyatmika', 'Pramudya', 'Sadewa',
            'Candraditya', 'Dwikora', 'Trihatmodjo', 'Wismoyo', 'Suryanegara',
            'Reksohadiprojo', 'Wiryodiningrat', 'Sastrowardoyo', 'Djojohadikusumo',
            'Sukarnoputri', 'Wibisono', 'Kertanegara', 'Wiranto', 'Sumohadiwidjojo',
            'Abdurrahman', 'Mangunwijaya', 'Hardjono', 'Suryokusumo',
            'Darmaputra', 'Haryanto', 'Purnama', 'Kusumawinahyu', 'Prasetya',
            'Nuswantoro', 'Baskoro', 'Ciptadi', 'Samudra', 'Pasopati',
            'Bawono', 'Wibawa', 'Murti', 'Susetyo', 'Leksono', 'Purboyo',
            'Widagdo', 'Hendrawan', 'Hariyadi', 'Maryanto', 'Winarno',
            'Puspito', 'Bramantyo', 'Kurniawan', 'Gunarto', 'Winaryo',
            'Sugiharto', 'Suprapto', 'Hartawan', 'Winata', 'Widiatmoko',
            'Sasongko', 'Haryono', 'Prasojo', 'Marwoto', 'Widjanarko',
            'Basuki', 'Budyanto', 'Suyanto', 'Sutanto', 'Sularso',
            'Dharmawan', 'Sutedja', 'Widura', 'Cahyana', 'Kusumo',
            'Purnawan', 'Suryawan', 'Subagyo', 'Sarwono', 'Sudarto',
            'Prabowo', 'Wijayanto', 'Nurcahyo', 'Harsono', 'Handoyo',
            'Widoyoko', 'Pramono', 'Hadian', 'Harjanto', 'Susetya',
            'Bintoro', 'Sismanto', 'Sutrisno', 'Sudiyono', 'Mulyanto',
            'Supriyono', 'Paryono', 'Sukarno', 'Hartono', 'Soebandrio',
            'Trisnanto', 'Wibawanto', 'Haryoko', 'Marjuki', 'Setiawan'
        ];

        $domains = ['gmail.com', 'yahoo.com', 'yahoo.co.id', 'outlook.com', 'icloud.com', 'proton.me', 'live.com'];

        for ($i = 0; $i < 500; $i++) {
            $firstName = $firstNames[array_rand($firstNames)];
            $lastName = $lastNames[array_rand($lastNames)];
            $name = "$firstName $lastName";
            $email = strtolower($firstName . '.' . $lastName . $i . '@' . $domains[array_rand($domains)]);

            User::create([
                'name' => $name,
                'email' => $email,
                'password' => bcrypt('password123'),
                'email_verified_at' => now(),
            ]);
        }
    }
}

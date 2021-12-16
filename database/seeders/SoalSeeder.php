<?php

namespace Database\Seeders;

use App\Models\Soal;

use Illuminate\Database\Seeder;

class SoalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    const soals = [
        [
            'subbab' => 'A',
            'soals' => [
                [
                    'soal' => 'Menurut John Dalton “atom dari unsur yang sama mempunyai ukuran, massa, dan sifat yang sama sedangkan atom dari unsur yang berbeda mempunyai ukuran, massa, dan sifat yang berbeda”. Apakah Anda setuju dengan pendapat tersebut? Jelaskan alasan anda.',
                    'kunci' => 'Tidak, karena adanya penemuan tentang isotop dan isobar yang dapat memungkinkan bahwa setiap atom dapat memiliki perbedaan massa sekalipun memiliki nomor atom dan sifat yang sama. Sehingga unsur dengan atom yang sama dapat memiliki ukuran dan massa yang berbeda tergantung dengan jumlah elektronnya.',
                ],
                [
                    'soal' => 'Apa alasan J. J. Thomson meyakini bahwa sinar katode bukan sinar biasa tetapi merupakan partikel? ',
                    'kunci' => 'Karena dalam penelitian yang ia lakukan didapatkan bahwa sinar katode dapat memutar baling-baling yang dipasang di antara anode dan katode.',
                ],
                [
                    'soal' => 'Apa dasarnya sehingga Rutherford menyimpulkan dari percobaan penghamburan sinar &alpha;, bahwa muatan positif dari atom terpusat pada inti yang sangat kecil?',
                    'kunci' => 'Pembelokan sinar alfa, sinar alfa yang ditembakkan sangat sedikit yang memantul. Memantulnya sinar alfa tersebut dikarenakan sinar alfa telah menabrak benda yang sangat kecil yaitu inti atom.',
                ],
                [
                    'soal' => 'Fakta apa yang mendorong Rutherford berkeyakinan bahwa ada partikel lain selain proton yang menyusun atom?',
                    'kunci' => 'Dalam penelitiannya, didapatkan perbandingan massa atom hidrogen terhadap massa atom helium adalah 1:4, dimana hidrogen mempunyai 1 proton dan helium mempunyai 2 proton. Seharusnya, perbandingannya adalah 1:2.',
                ],
                [
                    'soal' => 'Apabila massa elektron dianggap 1 satuan, berapakah satuan massa proton?',
                    'kunci' => '
                            <p style="font-weight: 600;">Massa elektron: 9,1100 x 10<sup>-29</sup> kg</p>
                            <p style="font-weight: 600;">Massa proton: 1,6726 x 10<sup>-24</sup> kg</p>
                            <p style="font-weight: 600;">Jika massa elektron dianggap 1 satuan, maka satuan massa proton adalah</p>
                            <p>\(\frac{\text{massa proton}}{\text{massa elektron}} = \frac{1,6726 \cdot 10^{-24}}{9,1100 \cdot 10^{-28}} = 1836 \text{satuan}\)</p>
                    '
                ],
            ],
        ],
        [
            'subbab' => 'B',
            'soals' => [
                [
                    'soal' => 'Fakta apa yang menjadi dasar bahwa jumlah proton menjadi ciri khas suatu atom?',
                    'kunci' => '<em>Belum ada kunci jawaban</em>',
                ],
                [
                    'soal' => '<div>
                        <p>Tentukan jumlah elektron, proton, dan neutron di dalam atom-atom berikut.</p>
                        <table style="width:100%;">
                            <tbody>
                                <tr>
                                    <td style="width:33%;">a. \(\ce{_40K}\)</td>
                                    <td style="width:34%;">c. \(\ce{_200Hg}\)</td>
                                    <td style="width:33%;">e. \(\ce{_235U}\)</td>
                                </tr>
                                <tr>
                                    <td style="width:33%;">b. \(\ce{_56Fe}\)</td>
                                    <td style="width:34%;">d. \(\ce{_108Ag}\)</td>
                                    <td style="width:33%;">f. \(\ce{_209Bi}\)</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>',
                    'kunci' => '<em>Belum ada kunci jawaban</em>',
                ],
                [
                    'soal' => 'Berapa massa atom dan jumlah elektron suatu atom dengan jumlah proton 15 dan jumlah neutron 16?',
                    'kunci' => '15 + 16 = <strong>31</strong>',
                ],
                [
                    'soal' => 'Jelaskan apa yang dimaksud dengan isotop, isobar, dan isoton disertai dengan contoh-contohnya!',
                    'kunci' => '
                        <p style="font-weight: 600;">Isotop adalah atom-atom dari unsur yang sama tetapi mempunyai nomor nomor massa yang berbeda. Contoh: </p>
                        <p style="font-weight: 600;">Isobar adalah atom-atom unsur yang berbeda tetapi dapat mempunyai nomor massa yang sama. Contoh:</p>
                        <p style="font-weight: 600;">Isoton adalah atom-atom unsur yang berbeda tetapi mempunyai jumlah neutron yang sama. Contoh:  </p>
                    '
                ],
                [
                    'soal' => '<div>
                        <p>Di antara atom-atom berikut, manakah pasangan atom yang merupakan isotop, isobar, dan isoton?</p>
                        <table style="width:100%;">
                            <tbody>
                                <tr>
                                    <td style="width:33%;">a. \(\ce{_131Xe}\)</td>
                                    <td style="width:34%;">c. \(\ce{_131I}\)</td>
                                    <td style="width:33%;">e. \(\ce{_127Te}\)</td>
                                </tr>
                                <tr>
                                    <td style="width:33%;">b. \(\ce{_126Te}\)</td>
                                    <td style="width:34%;">d. \(\ce{_128Xe}\)</td>
                                    <td style="width:33%;">f. \(\ce{_130I}\)</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>',
                    'kunci' => '<em>Belum ada kunci jawaban</em>',
                ],
                [
                    'soal' => '
                        <div>
                            <p>Jumlah proton 11 dan jumlah neutron 13</p>
                            <p>Massa atom 27 dan mempunyai 13 elektron</p>
                        </div>
                    ',
                    'kunci' => '<em>Belum ada kunci jawaban</em>',
                ],
                [
                    'soal' => 'Mengapa atom-atom dari unsur yang sama mempunyai nomor atom yang sama, tetapi nomor massanya bisa berbeda-beda?',
                    'kunci' => '<em>Belum ada kunci jawaban</em>',
                ],
            ],
        ],
        [
            'subbab' => 'bohr',
            'soals' => [
                [
                    'soal' => 'Suatu atom mempunyai konfigurasi elektron: 2 8 8 dan mempunyai jumlah neutron 22. Berapakah nomor massa atom tersebut?',
                    'kunci' => 'p + n = &Sigma;e + n = (2 + 8 + 8) + 22 = <strong>42</strong>',
                ],
                [
                    'soal' => 'Suatu atom mempunyai 3 kulit elektron dengan elektron valensi 5. Jika jumlah neutronnya 16, tuliskan lambang unsur tersebut!',
                    'kunci' => '\(\ce{^31_15P}\)',
                ],
                [
                    'soal' => '<div>
                        <p>Buatlah konfigurasi elektron dari atom-atom berikut, kemudian tentukan berapa orbital yang terisi elektron dan berapa elektron yang tidak berpasangan.</p>
                        <table style="width:100%;">
                            <tr>
                                <td style="width:33%">a. Co</td>
                                <td style="width:34%">b. Ba</td>
                                <td style="width:33%">c. Se</td>
                            </tr>
                        </table>
                    </div>',
                    'kunci' => '<em>Belum ada kunci jawaban</em>',
                ],
            ],
        ],
        [
            'subbab' => 'kuantum',
            'soals' => [
                [
                    'soal' => 'Sebutkan jenis bilangan kuantum dan mencirikan apakah bilangan-bilangan kuantum tersebut?',
                    'kunci' => '<ol style="list-style-type: decimal; padding-left: 1rem; font-weight: 600;">
                        <li>Bilangan kuantum utama (<em>n</em>) menentukan besarnya tingkat energi suatu elektron yang mencirikan ukuran orbital</li>
                        <li>Bilangan kuantum azimut atau momentum sudut (<em>l</em>)</li>
                        <li>Bilangan kuantum magnetik (<em>m</em><sub>l</sub> atau <em>m</em>) menentukan arah orientasi dari orbital di dalam ruang relatif terhadap orbital lainnya</li>
                        <li>Bilangan kuantum spin (<em>s</em> atau <em>m</em><sub>s</sub>) merupakan bilangan kuantum yang terlepas dari pengaruh momentum sudut.</li>
                    </ol>'
                ],
                [
                    'soal' => 'Tentukan nilai bilangan kuantum <em>n</em>, <em>l</em>, <em>m</em>, dan <em>s</em> yang mungkin dari elektron yang menempati subkulit 3<em>p</em>.',
                    'kunci' => '<em>Belum ada kunci jawaban</em>',
                ],
                [
                    'soal' => 'Apa perbedaan antara orbital <em>d</em><sub>xy</sub> dengan <em>d</em><sub>x<sup>2</sup>y<sup>2</sup></sub> ?',
                    'kunci' => '<em>Belum ada kunci jawaban</em>',
                ],
            ],
        ],
        [
            'subbab' => 'konfigurasi',
            'soals' => [
                [
                    'soal' => 'Subkulit manakah yang mempunyai energi lebih tinggi: 2d atau 4s? Jelaskan!',
                    'kunci' => '<em>Belum ada kunci jawaban</em>',
                ],
                [
                    'soal' => '<div>
                        <p>Buatlah konfigurasi elektron dari atom-atom berikut:</p>
                        <table style="width:100%;">
                            <tbody>
                                <tr>
                                    <td style="width:33%;">a. Na</td>
                                    <td style="width:34%;">c. Ca</td>
                                    <td style="width:33%;">e. I</td>
                                </tr>
                                <tr>
                                    <td style="width:33%;">b. Al</td>
                                    <td style="width:34%;">d. Br</td>
                                    <td style="width:33%;"></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>',

                    'kunci' => '<ul style="font-weight: 600;">
                        <li>Na: [Ne] 3<em>s</em><sup>1</sup></li>
                        <li>Al: [Ne] 3<em>s</em><sup>2</sup> 3<em>p</em><sup>1</sup></li>
                        <li>Ca: [Ar] 4<em>s</em><sup>2</sup></li>
                        <li>Br: [Ar] 4<em>s</em><sup>2</sup> 3<em>d</em><sup>10</sup> 4<em>p</em><sup>5</sup></li>
                        <li>I: [Xe] 5<em>s</em><sup>2</sup> 4<em>d</em><sup>10</sup> 5<em>p</em><sup>5</sup></li>
                    </ul>',
                ],
                [
                    'soal' => 'Konfigurasi manakah yang lebih stabil: [Ar] 4<em>s</em><sup>2</sup> 3<em>d</em><sup>9</sup> atau [Ar] 4<em>s</em><sup>1</sup> 3<em>d</em><sup>10</sup>? Jelaskan!',
                    'kunci' => '[Ar] 4<em>s</em><sup>1</sup> 3<em>d</em><sup>10</sup>. karena energinya lebih rendah, mengikuti teori penyimpangan dari aturan umum.',
                ],
            ],
        ],
        [
            'subbab' => 'sejarah spu',
            'soals' => [
                [
                    'soal' => 'Apa dasar penyusunan sistem pengelompokan unsur Triade Dobereiner dan Sistem Oktaf Newlands?',
                    'kunci' => '<em>Belum ada kunci jawaban</em>',
                ],
                [
                    'soal' => 'Apakah dasar Mendeleev dalam mengembangkan sistem periodiknya? Apakah kelebihan dari sistem periodik tersebut dibandingkan dengan sistem periodik sebelumnya?',
                    'kunci' => '<em>Belum ada kunci jawaban</em>',
                ],
                [
                    'soal' => 'Mengapa Mendeleev memberikan tempat kosong pada beberapa tempat dalam sistem periodik yang disusunnya?',
                    'kunci' => '<em>Belum ada kunci jawaban</em>',
                ],
                [
                    'soal' => 'Jelaskan hubungan antara konfigurasi elektron dengan letak unsur dalam sistem periodik modern (Moseley)!',
                    'kunci' => '<em>Belum ada kunci jawaban</em>',
                ],
                [
                    'soal' => '<div>
                        <p>Tanpa melihat daftar sistem periodik unsur, tentukan letak unsur-unsur berikut di dalam sistem periodik unsur modern.</p>
                        <table style="width:100%">
                            <tbody>
                                <tr>
                                    <td style="width:50%">a. \(\ce{_13A}\)</td>
                                    <td style="width:50%">c. \(\ce{_8R}\)</td>
                                </tr>
                                <tr>
                                    <td style="width:50%">b. \(\ce{_35B}\)</td>
                                    <td style="width:50%">d. \(\ce{_53X}\)</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>',
                    'kunci' => '<ul style="font-weight: 600;">
                        <li>a. periode 3, golongan 13</li>
                        <li>b. periode 2, golongan 16</li>
                        <li>c. periode 4, golongan 15</li>
                        <li>z. periode 5, golongan 17</li>
                    </ul>',
                ],
                [
                    'soal' => 'Suatu unsur terletak pada golongan VA, periode 3. Bagaimana konfigurasi elektron unsur tersebut?',
                    'kunci' => '[Ne] 3<em>s</em><sup>2</sup> 3<em>p</em><sup>5</sup>',
                ],
                [
                    'soal' => 'Unsur \(\ce{_8A}\) terletak dalam satu golongan dengan unsur \(\ce{D}\). Jika unsur \(\ce{D}\) di bawah unsur \(\ce{A}\), tentukan nomor atom unsur \(\ce{D}\) dan konfigurasi elektronnya.',
                    'kunci' => '<div style="font-weight:600;">
                        <p>Nomor atom: 16 (Belerang)</p>
                        <p>Konfigurasi Elektron: [Ne] 3<em>s</em><sup>2</sup> 3<em>p</em><sup>4</sup></p>
                    </div>'
                ],
            ],
        ],
        [
            'subbab' => 'sifat keperiodikan',
            'soals' => [
                [
                    'soal' => 'Unsur-unsur yang terletak dalam satu golongan mempunyai kemiripan sifat. Jelaskan apa penyebabnya.',
                    'kunci' => 'Karena memiliki elektron valensi yang sama sehingga terdapat kemiripan sifat kimia',
                ],
                [
                    'soal' => 'Jelaskan apa yang dimaksud dengan sifat unsur merupakan fungsi periodik dari nomor atom.',
                    'kunci' => 'Bila unsur-unsur tersebut disusun berdasarkan kenaikan massa atomnya, mkaa sifat unsur akan berulang secara periodik.',
                ],
                [
                    'soal' => 'Bagaimana perubahan sifat kelogaman unsur-unsur dalam sistem periodik dalam satu periode dari kiri ke kanan?',
                    'kunci' => 'Dari kiri ke kanan, sifat kelogaman unsur-unsur dalam satu periode mengalami penurunan',
                ],
                [
                    'soal' => '<div>
                        <p>Di antara unsur-unsur berikut, unsur manakah yang titik leleh dan titik didihnya paling tinggi?</p>
                        <p>a. \( \ce{Li} \), \( \ce{Na} \), \( \ce{K} \), \( \ce{Rb} \), \( \ce{Cs} \), \( \ce{Fr} \)</p>
                        <p>b. \( \ce{F2} \), \( \ce{Cl2} \), \( \ce{Br2} \), \( \ce{I2} \)</p>
                        <p>c. \( \ce{Na} \), \( \ce{Mg} \), \( \ce{Al} \), \( \ce{Si} \), \( \ce{P} \)</p>
                    </div>',
                    'kunci' => '<div style="font-weight: 600;">
                        <p>a. \( \ce{Fr} \)</p>
                        <p>b. \( \ce{I2} \)</p>
                        <p>c. \( \ce{Si} \)</p>
                    </div>',
                ],
                [
                    'soal' => 'Bagaimana hubungan antara nilai energi ionisasi dengan mudah tidaknya membentuk ion positif?',
                    'kunci' => 'Semakin rendah energi ionisasi, maka semakin mudah melepaskan elektron terluarnya, sehingga semakin mudah pula untuk membentuk ion positif.',
                ],
                [
                    'soal' => 'Jelaskan hubungan antara jari-jari atom dengan nilai energi ionisasi suatu atom.',
                    'kunci' => 'Semakin kecil jari-jari atom, maka gaya tarik antara elektron valensi dengan inti atom akan semakin besar, sehingga elektron akan semakin sulit untuk melepaskan elektron dan berakibat semakin besar nilai energi ionsisasi.',
                ],
                [
                    'soal' => 'Apa yang dimaksud dengan afinitas elektron? Apa arti tinggi rendahnya nilai afinitas elektron bagi suatu atom?',
                    'kunci' => 'Afinitas elektron adalah Besarnya energi yang dihasilkan apabila suatu atom menangkap sebuah elektron pada fase gas. Afinitas elektron dapat diartikan sebagai mudah atau tidaknya suatu atom untuk menerima elektron.',
                ],
                [
                    'soal' => 'Apa artinya jika suatu atom mempunyai nilai keelektronegatifan tinggi?',
                    'kunci' => 'Semakin besar nilai keelektronegatifan suatu atom, maka semakin mudah bagi atom tersebut untuk menarik pasangan elektron ikatan. yang berakibat terbentuknya muatan parsial negatif pada atom tersebut.',
                ],
            ],
        ],
    ];

    public function run()
    {
        Soal::truncate();
        //write soals to database 
        foreach (self::soals as $soal) {
            $subbab = $soal['subbab'];
            foreach ($soal['soals'] as $soal) {
                Soal::create([
                    'subbab' => $subbab,
                    'soal' => $soal['soal'],
                    'kunci' => $soal['kunci']
                ]);
            }
        }
    }
}

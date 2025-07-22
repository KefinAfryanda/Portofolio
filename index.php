<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portofolio Profesional - Teknologi Rekayasa Komputer</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary: #00eaff;
            --accent: #7f53ac;
            --background: #181f2a;
            --text: #eaf6fb;
            --card: #20283a;
            --skill: #1c90ff;
            --skill-hover: #ff36b1;
            --card-hover: #232f44;
        }
        body {
            font-family: 'Roboto', Arial, sans-serif;
            background: var(--background);
            color: var(--text);
            margin: 0;
            padding: 0;
        }
        header {
            position: relative;
            background: linear-gradient(-45deg, #00eaff, #7f53ac, #1c90ff, #ff36b1);
            background-size: 400% 400%;
            animation: gradientBG 8s ease infinite;
            color: white;
            padding: 72px 20px 48px 20px;
            text-align: center;
            overflow: hidden;
        }
        @keyframes gradientBG {
          0% { background-position: 0% 50%; }
          50% { background-position: 100% 50%; }
          100% { background-position: 0% 50%; }
        }
        header img {
            width: 130px;
            height: 130px;
            border-radius: 50%;
            object-fit: cover;
            border: 4px solid #fff;
            box-shadow: 0 4px 18px rgba(0,0,0,0.18);
            margin-bottom: 18px;
            background: #1c90ff33;
        }
        header h1 {
            margin: 0 0 10px 0;
            font-size: 2.8rem;
            letter-spacing: 1px;
            line-height: 1.2;
        }
        .typed-desc {
            display: inline-block;
            font-size: 1.25rem;
            min-height: 28px;
            border-right: 2px solid #fff;
            white-space: nowrap;
            overflow: hidden;
            animation: typing 3.2s steps(60, end), blink-caret 0.7s step-end infinite;
        }
        @keyframes typing {
          from { width: 0 }
          to { width: 100% }
        }
        @keyframes blink-caret {
          from, to { border-color: transparent }
          50% { border-color: #fff; }
        }
        .container {
            max-width: 950px;
            margin: 40px auto 0 auto; /* Perbaiki margin-top agar tidak tertutup header */
            padding: 0 20px 40px 20px;
        }
        .card {
            background: var(--card);
            border-radius: 15px;
            box-shadow: 0 2px 12px rgba(0,255,255,0.12);
            margin-bottom: 30px;
            padding: 34px 28px;
            transition: background 0.25s, box-shadow 0.25s;
        }
        .card:hover {
            background: var(--card-hover);
            box-shadow: 0 6px 24px 0 #00eaff33;
        }
        .section-title {
            font-size: 1.35rem;
            color: var(--primary);
            margin-top: 0;
            margin-bottom: 18px;
            font-weight: 700;
            border-left: 4px solid var(--accent);
            padding-left: 10px;
            letter-spacing: 0.5px;
        }
        ul { margin: 0 0 0 20px; }
        .skills {
            display: flex;
            flex-wrap: wrap;
            gap: 14px;
            margin: 0;
            padding: 0;
        }
        .skill-tag {
            background: linear-gradient(90deg, var(--skill), var(--accent));
            color: #fff;
            padding: 7px 16px;
            border-radius: 20px;
            font-size: 0.99rem;
            display: inline-block;
            font-weight: 500;
            box-shadow: 0 1px 6px #0076ff22;
            transition: background 0.25s, color 0.22s;
            cursor: default;
        }
        .skill-tag:hover {
            background: linear-gradient(90deg, var(--skill-hover), var(--skill));
            color: #fff;
        }
        .project {
            margin-bottom: 18px;
        }
        .project-title {
            font-weight: 700;
            font-size: 1.07rem;
            color: var(--primary);
            letter-spacing: 0.1px;
        }
        .project-desc {
            margin: 4px 0 0 0;
        }
        .contact-row {
            display: flex;
            flex-wrap: wrap;
            gap: 13px;
        }
        .contact-item {
            background: #2b3459;
            color: var(--primary);
            padding: 9px 22px;
            border-radius: 22px;
            font-size: 1.04rem;
            text-decoration: none;
            margin-top: 8px;
            border: 1px solid var(--skill);
            transition: background 0.2s, color 0.18s, border 0.2s;
            display: flex;
            align-items: center;
            gap: 6px;
        }
        .contact-item:hover {
            background: var(--primary);
            color: #fff;
            border: 1px solid var(--accent);
            text-decoration: none;
        }
        .contact-icon {
            font-size: 1.2em;
        }
        @media (max-width: 600px) {
            .container {
                padding: 0 5px 24px 5px;
                margin-top: 18px;
            }
            .card { padding: 18px 7px; }
            header { padding: 30px 5px 20px 5px; }
            header img { width: 90px; height: 90px; }
            header h1 { font-size: 1.6rem; }
            .typed-desc { font-size: 1.0rem; }
        }
    </style>
    <!-- ICON CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
</head>
<body>
    <header>
        <img src="kefin.jpg" alt="Foto Kefin Afryanda" loading="lazy">
        <h1>Kefin Afryanda</h1>
        <span class="typed-desc" id="typed-desc"></span>
    </header>
    <main class="container">
        <!-- Profil Singkat -->
        <section class="card">
            <h2 class="section-title">Profil Singkat</h2>
            <p>
                Saya adalah mahasiswa aktif Program Studi Teknologi Rekayasa Komputer di Politeknik Pertanian Negeri Payakumbuh, saat ini berada di semester 4. Memiliki minat dan keahlian dalam pemrograman, basis data, serta pengembangan perangkat berbasis IoT menggunakan ESP32 dan Arduino. Terampil dalam rekayasa perangkat lunak, jaringan komputer, serta penggunaan berbagai software teknis. Mampu bekerja secara individu maupun tim, dengan kemampuan manajemen waktu, kepemimpinan, dan komunikasi yang baik.
            </p>
        </section>
        <!-- Keahlian -->
        <section class="card">
            <h2 class="section-title">Keahlian</h2>
            <div class="skills">
                <span class="skill-tag">Pemrograman (Python)</span>
                <span class="skill-tag">Web Development (HTML, CSS, PHP, Laravel)</span>
                <span class="skill-tag">IoT & Embedded System (Arduino, ESP32)</span>
                <span class="skill-tag">Jaringan Komputer (Cisco, MikroTik, VLAN, Routing)</span>
                <span class="skill-tag">Database (MySQL)</span>
                <span class="skill-tag">UI/UX Design</span>
            </div>
        </section>
        <!-- Pengalaman Kerja / Proyek -->
        <section class="card">
            <h2 class="section-title">Pengalaman & Proyek</h2>
            <div class="project">
                <div class="project-title">Pengembangan Sistem IoT Berbasis ESP32 & Arduino</div>
                <div class="project-desc">Proyek akademik dan kreatif dalam monitoring dan automasi perangkat.</div>
            </div>
            <div class="project">
                <div class="project-title">PKM-KC 2024 (Program Kreativitas Mahasiswa - Karsa Cipta)</div>
                <div class="project-desc">Mewakili kampus dan berhasil meraih pendanaan dari Kemendikbudristek.</div>
            </div>
            <div class="project">
                <div class="project-title">Organisasi</div>
                <div class="project-desc">UKM Komunikasi dan Informasi (K-INFO), Divisi Public Speaking & Jurnalistik (2024 - Sekarang). UKM Olahraga, Divisi Catur (2023 - 2024).</div>
            </div>
        </section>
        <!-- Pendidikan -->
        <section class="card">
            <h2 class="section-title">Pendidikan</h2>
            <ul>
                <li><b>Sarjana Terapan</b> – Teknologi Rekayasa Komputer<br>Politeknik Pertanian Negeri Payakumbuh, 2023 - Sekarang</li>
            </ul>
        </section>
        <!-- Sertifikasi -->
        <section class="card">
            <h2 class="section-title">Sertifikasi</h2>
            <ul>
                <li>PKM 2024 – 2024</li>
                <li>IPv6 – Sept 2024</li>
            </ul>
        </section>
        <!-- Kontak & Media Sosial -->
        <section class="card">
            <h2 class="section-title">Kontak & Media Sosial</h2>
            <div class="contact-row">
                <a class="contact-item" href="mailto:kefinafryanda03@gmail.com"><i class="fa-solid fa-envelope contact-icon"></i>Email</a>
                <span class="contact-item"><i class="fa-solid fa-phone contact-icon"></i>+62 878-6393-7599</span>
                <a class="contact-item" href="https://www.instagram.com/kefryan991?igsh=Ymd1c3BsZ2c4Y2pn" target="_blank"><i class="fa-brands fa-instagram contact-icon"></i>Instagram</a>
                </div>
        </section>
    </main>
    <!-- Typing Animation JS -->
    <script>
    // DAFTAR TEKS PEKERJAAN YANG AKAN DI ANIMASI
    const textArray = [
      'Teknologi Rekayasa Komputer',
      'Software & Hardware Developer',
      'Network Engineer',
      'IoT & Embedded System Enthusiast'
    ];
    let typingDelay = 55;
    let erasingDelay = 30;
    let newTextDelay = 1200; // jeda sebelum mengetik ulang
    let textArrayIndex = 0;
    let charIndex = 0;

    const typedSpan = document.getElementById("typed-desc");

    function type() {
      if (charIndex < textArray[textArrayIndex].length) {
        typedSpan.textContent += textArray[textArrayIndex].charAt(charIndex);
        charIndex++;
        setTimeout(type, typingDelay);
      } else {
        setTimeout(erase, newTextDelay);
      }
    }

    function erase() {
      if (charIndex > 0) {
        typedSpan.textContent = textArray[textArrayIndex].substring(0, charIndex-1);
        charIndex--;
        setTimeout(erase, erasingDelay);
      } else {
        textArrayIndex++;
        if (textArrayIndex >= textArray.length) textArrayIndex = 0;
        setTimeout(type, 400);
      }
    }

    document.addEventListener("DOMContentLoaded", function() {
      if(textArray.length) setTimeout(type, 600);
    });
    </script>
</body>
</html>

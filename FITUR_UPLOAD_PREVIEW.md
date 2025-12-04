# Fitur Upload & Preview File

## Fitur yang Telah Ditambahkan

### 1. **Upload File dengan Drag & Drop**

- User dapat drag & drop file langsung ke area upload
- Area upload akan berubah warna (highlight) saat file di-drag ke atasnya
- Mendukung multiple file upload sekaligus

### 2. **Validasi File**

- **Ukuran maksimal**: 25 MB per file
- **Format yang didukung**:
  - Gambar: JPG, JPEG, PNG
  - Dokumen: PDF, DOC, DOCX, XLS, XLSX
- Alert otomatis jika file tidak sesuai kriteria

### 3. **Preview File**

- **Thumbnail Gambar**: Gambar akan ditampilkan sebagai thumbnail (60x60px) yang bisa diklik
- **Icon File**: File non-gambar ditampilkan dengan icon sesuai tipe (PDF, Word, Excel)
- **Preview Modal**:
  - Gambar: Ditampilkan dalam ukuran penuh (responsive)
  - PDF: Ditampilkan dalam iframe viewer
  - Bisa di-zoom dan di-scroll

### 4. **Informasi File**

- Nama file (dengan tooltip untuk nama panjang)
- Ukuran file dalam MB
- Tanggal upload
- Tipe file dengan icon berwarna

### 5. **Aksi File**

- **Preview**: Tombol mata untuk melihat preview file
- **Download**: Download file dari modal preview
- **Hapus**: Tombol X merah untuk menghapus file dari list

### 6. **Responsive Design**

- Tampilan optimal di desktop dan mobile
- Modal preview menyesuaikan ukuran layar
- Thumbnail dan button menyesuaikan di layar kecil

## Cara Penggunaan

### Upload File

1. **Klik area upload** atau **drag & drop** file ke area yang tersedia
2. File akan otomatis divalidasi
3. Preview akan muncul di bawah area upload

### Preview File

1. Klik **thumbnail gambar** atau tombol **mata (eye icon)**
2. Modal preview akan terbuka
3. Untuk PDF, gunakan scroll untuk navigasi halaman
4. Klik **Download** untuk mengunduh file
5. Klik **Tutup** atau X untuk menutup preview

### Hapus File

1. Klik tombol **X merah** di sebelah kanan file
2. File akan dihapus dari list upload

## Teknologi yang Digunakan

- **JavaScript FileReader API**: Untuk membaca dan preview file
- **Bootstrap 5 Modal**: Untuk tampilan preview
- **Drag & Drop API**: Untuk fitur drag and drop
- **CSS3 Transitions**: Untuk animasi smooth
- **Line Awesome Icons**: Untuk icon file

## File yang Dimodifikasi

1. `application/modules/frontend/views/rfq/index.php`

   - Fungsi `handleFileUpload()`: Upload dan validasi
   - Fungsi `createFilePreview()`: Generate preview card
   - Fungsi `previewFile()`: Tampilkan modal preview
   - Fungsi `downloadFile()`: Download file
   - Fungsi `removeFile()`: Hapus file
   - Event listeners untuk drag & drop

2. `assets/css/custom.css`
   - Styling untuk upload area
   - Styling untuk file preview cards
   - Styling untuk thumbnail
   - Responsive styling untuk mobile
   - Hover effects dan transitions

## Browser Support

- Chrome/Edge: ✅ Full support
- Firefox: ✅ Full support
- Safari: ✅ Full support
- Mobile browsers: ✅ Full support

## Catatan Penting

- File hanya disimpan di memory browser (uploadedFiles array)
- Untuk submit ke server, perlu implementasi form submission
- Preview PDF memerlukan browser yang support iframe PDF viewer
- Untuk production, pertimbangkan lazy loading untuk file besar

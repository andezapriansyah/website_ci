<?php
defined('BASEPATH') or exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'home';
$route['404_override'] = 'home/error404';
$route['translate_uri_dashes'] = FALSE;

// Custom Routes

$route['kuliah-online-pertama'] = 'home/kuliahonlinepertama';

// TENTANG UNSIA
$route['contact'] = 'home/contact';
$route['tentang-unsia/salam-rektor'] = 'home/salamrektor';
$route['tentang-unsia/kenapa-unsia'] = 'home/whyUnsia';
$route['tentang-unsia/keunggulan-dan-manfaat'] = 'home/benefit';
$route['tentang-unsia/list-of-partner'] = 'home/listofpartner';
$route['tentang-unsia/sejarah'] = 'home/sejarah';
$route['tentang-unsia/visi-misi'] = 'home/visimisi';
$route['tentang-unsia/struktur-organisasi'] = 'home/strukturorganisasi';
$route['tentang-unsia/faq'] = 'home/faq';

// FASILITAS
$route['fasilitas/learning-community'] = 'home/learningcommunity';
$route['fasilitas/laboratorium-virtual'] = 'home/labvirtual';
$route['fasilitas/studio-multimedia'] = 'home/studiomultimedia';

// PENDAFTARAN
$route['pendaftaran/info-pendaftaran'] = 'home/infopendaftaran';
$route['pendaftaran/biaya-perkuliahan'] = 'home/biayaperkuliahan';
$route['pendaftaran/beasiswa'] = 'home/beasiswa';
$route['pendaftaran/pembiayaan-soft-loan'] = 'home/pembiayaansoftloan';

// AKADEMIK
$route['akademik/program-kampus-merdeka'] = 'home/programkampusmerdeka';
$route['akademik/panduan-pembelajaran-online'] = 'home/panduanpembelajaranonline';

// BERITA
$route['arsip/berita/berita-list'] = 'home/listberita';
$route['arsip/berita/berita-detail'] = 'home/detailberitasatu';

// BLOG
$route['arsip/blog/blog-list'] = 'home/listblog';
$route['arsip/blog/blog-detail-belajar-online'] = 'home/detailblogsatu';
$route['arsip/blog/blog-detail-kelas-online'] = 'home/detailblogdua';

//AKADEMIK - PROSES AKADEMIK
$route['akademik/proses-akademik/panduan-akademik'] = 'home/panduanakademik';
$route['akademik/proses-akademik/teaching-profesor'] = 'home/teachingprofesor';
$route['akademik/proses-akademik/keunggulan-lulusan-unsia'] = 'home/keunggulanlulusanunsia';
$route['akademik/proses-akademik/peraturan-akademik'] = 'home/peraturanakademik';
$route['akademik/proses-akademik/kalender-akademik'] = 'home/kalenderakademik';

//AKADEMIK - PROGRAM STUDI
// MANAJEMEN
$route['akademik/program-studi/manajemen'] = 'home/manajemen';
$route['akademik/program-studi/manajemen/profil'] = 'home/profilmanajemen';
$route['akademik/program-studi/manajemen/dosen'] = 'home/dosenmanajemen';
$route['akademik/program-studi/manajemen/keunggulan'] = 'home/keunggulanmanajemen';
$route['akademik/program-studi/manajemen/capaian-pembelajaran'] = 'home/capaianpembelajaranmanajemen';
$route['akademik/program-studi/manajemen/kurikulum'] = 'home/kurikulummanajemen';
$route['akademik/program-studi/manajemen/profil-lulusan'] = 'home/profillulusanmanajemen';
$route['akademik/program-studi/manajemen/prospek-karir'] = 'home/prospekkarirmanajemen';

// SISTEM INFORMASI
$route['akademik/program-studi/sistem-informasi'] = 'home/sisteminformasi';
$route['akademik/program-studi/sistem-informasi/profil'] = 'home/profilsisteminformasi';
$route['akademik/program-studi/sistem-informasi/dosen'] = 'home/dosensisteminformasi';
$route['akademik/program-studi/sistem-informasi/keunggulan'] = 'home/keunggulansisteminformasi';
$route['akademik/program-studi/sistem-informasi/capaian-pembelajaran'] = 'home/capaianpembelajaransisteminformasi';
$route['akademik/program-studi/sistem-informasi/kurikulum'] = 'home/kurikulumsisteminformasi';
$route['akademik/program-studi/sistem-informasi/profil-lulusan'] = 'home/profillulusansisteminformasi';
$route['akademik/program-studi/sistem-informasi/prospek-karir'] = 'home/prospekkarirsisteminformasi';

// AKUNTANSI
$route['akademik/program-studi/akuntansi'] = 'home/akuntansi';
$route['akademik/program-studi/akuntansi/dosen'] = 'home/dosenakuntansi';
$route['akademik/program-studi/akuntansi/keunggulan'] = 'home/keunggulanakuntansi';
$route['akademik/program-studi/akuntansi/kurikulum'] = 'home/kurikulumakuntansi';
$route['akademik/program-studi/akuntansi/prospek-karir'] = 'home/prospekkarirakuntansi';

// KOMUNIKASI
$route['akademik/program-studi/komunikasi'] = 'home/komunikasi';
$route['akademik/program-studi/komunikasi/dosen'] = 'home/dosenkomunikasi';
$route['akademik/program-studi/komunikasi/keunggulan'] = 'home/keunggulankomunikasi';
$route['akademik/program-studi/komunikasi/kurikulum'] = 'home/kurikulumkomunikasi';
$route['akademik/program-studi/komunikasi/prospek-karir'] = 'home/prospekkarirkomunikasi';

// INFORMATIKA
$route['akademik/program-studi/informatika'] = 'home/informatika';
$route['akademik/program-studi/informatika/dosen'] = 'home/doseninformatika';
$route['akademik/program-studi/informatika/keunggulan'] = 'home/keunggulaninformatika';
$route['akademik/program-studi/informatika/kurikulum'] = 'home/kurikuluminformatika';
$route['akademik/program-studi/informatika/prospek-karir'] = 'home/prospekkaririnformatika';


// ADMIN PANEL - CMS
// AUTH
$route['admin-cms'] = 'auth';
$route['admin-cms/registration'] = 'auth/registration';
$route['admin-cms/blocked'] = 'auth/blocked';
$route['admin-cms/forgot-password'] = 'auth/forgotPassword';
$route['admin-cms/change-password'] = 'auth/changePassword';
$route['admin-cms/koneksi'] = 'auth/koneksi';

// ADMIN
$route['admin-cms/admin'] = 'admin';
$route['admin-cms/admin/role'] = 'admin/role';
$route['admin-cms/admin/role-access'] = 'admin/roleaccess';

// CONTENT
$route['admin-cms/content'] = 'content';
$route['admin-cms/content/add-blog'] = 'content/newblog';

// MENU
$route['admin-cms/menu'] = 'menu';
$route['admin-cms/menu/submenu'] = 'menu/submenu';

// USER
$route['admin-cms/user'] = 'user';
$route['admin-cms/user/edit'] = 'user/edit';
$route['admin-cms/user/change-password'] = 'user/changepassword';

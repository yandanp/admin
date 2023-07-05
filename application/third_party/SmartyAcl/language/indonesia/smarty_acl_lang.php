<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Name:    Smarty ACL Error Messages
 * Author:  Smarty Scripts
 * Site:    https://smartyscripts.com
 */

// General Errors
$lang['error_update_security_tokens'] = 'Tidak dapat memperbarui token keamanan pengguna';
$lang['error_update_user_data'] = 'Tidak dapat memperbarui data pengguna';
$lang['error_clear_user_attempts'] = 'Tidak dapat menghapus upaya pengguna';
$lang['error_user_not_found'] = 'Pengguna tidak ditemukan';
$lang['error_invalid_security_token'] = 'Kode token keamanan tidak valid';
$lang['error_email_already_confirmed'] = 'Alamat email telah dikonfirmasi';
$lang['error_loggedin_role_id_not_found'] = 'ID Peran Pengguna tidak ditemukan';
$lang['error_updating_user_account'] = 'Tidak dapat memperbarui data akun pengguna';
$lang['error_user_delete_yourself'] = 'Anda tidak dapat menghapus akun Anda sendiri';
$lang['error_admin_delete_superadmin'] = 'Anda tidak berwenang untuk menghapus jenis pengguna ini.';
$lang['error_admin_unable_send_mail'] = 'Tidak dapat mengirim surat! Periksa log untuk info lebih lanjut.';

// Register
$lang['register_identity_unavailable'] = 'Identitas sudah digunakan atau tidak valid';
$lang['register_undefined_role'] = 'Peran default tidak disetel';
$lang['register_invalid_role'] = 'Peran default tidak valid';

//Activation Email
$lang['email_activation_subject'] = 'Aktivasi Akun';
$lang['email_activate_heading'] = 'Aktifkan akun untuk %s';
$lang['email_activate_subheading'] = 'Silakan klik tautan ini ke %s.';
$lang['email_activate_link'] = 'Aktivasi akun anda';

//Activation
$lang['activation_invalid_link'] = 'Tautan aktivasi kosong atau tidak valid';
$lang['activation_expired_link'] = 'Tautan aktivasi kedaluwarsa atau tidak valid';
$lang['activation_invalid_token'] = 'Akun tidak dapat diaktifkan dengan kode ini. Minta tautan aktivasi baru.';

//Forgotten Password
$lang['forgot_password_email_not_found'] = 'Tidak dapat menemukan akun dengan alamat email ini';
$lang['error_create_password_reset_data'] = 'Tidak dapat membuat data pengaturan ulang kata sandi';

// Forgot Password Email
$lang['email_forgotten_password_subject'] = 'Verifikasi Kata Sandi Lupa';
$lang['email_forgot_password_heading'] = 'Setel Ulang Kata Sandi untuk %s';
$lang['email_forgot_password_subheading'] = 'Silakan klik tautan ini ke %s.';
$lang['email_forgot_password_link'] = 'Mereset password Anda';

//Reset password
$lang['password_reset_invalid_token'] = 'Tidak dapat menemukan kode reset kata sandi';
$lang['password_reset_expired_token'] = 'Kode ulang kata sandi kadaluarsa';
$lang['password_reset_failed_update'] = 'Tidak dapat memperbarui kata sandi akun Anda';
$lang['password_reset_failed_delete'] = 'Tidak dapat menghapus ulang data kata sandi';

//Login
$lang['login_error_incorrect'] = 'Login atau Kata Sandi Salah';
$lang['login_error_timeout'] = 'Terkunci Sementara. Coba lagi nanti.';
$lang['login_error_role_inactive'] = 'Grup Anda tidak aktif, Anda tidak dapat melanjutkan login.';
$lang['login_error_account_inactive'] = 'Akun tidak aktif, Anda tidak dapat melanjutkan login.';
$lang['login_error_account_banned'] = 'Akun dilarang, Anda tidak dapat melanjutkan login.';
$lang['login_error_email_unverified'] = 'Sebelum melanjutkan, periksa email Anda untuk tautan verifikasi.';

//Roles
$lang['roles_error_unable_create'] = 'Tidak dapat membuat Peran baru';
$lang['roles_error_unable_update'] = 'Tidak dapat memperbarui Peran';
$lang['roles_error_unable_delete'] = 'Tidak dapat menghapus Peran';
$lang['roles_error_notallowed_delete'] = 'Tidak dapat menghapus grup administrator';

//Modules
$lang['modules_error_unable_create'] = 'Tidak dapat membuat Modul baru';
$lang['modules_error_unable_update'] = 'Tidak dapat memperbarui Modul';
$lang['modules_error_unable_delete'] = 'Tidak dapat menghapus Modul';
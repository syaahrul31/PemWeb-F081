/*==============================================================*/
/* DBMS name:      MySQL 5.0                                    */
/* Created on:     4/25/2022 9:38:48 AM                         */
/*==============================================================*/


/*==============================================================*/
/* Table: GURU_PENGAJAR                                         */
/*==============================================================*/
create table GURU_PENGAJAR
(
   ID_GURU              varchar(12) not null  comment '',
   NAMA_GURU            varchar(25) not null  comment '',
   GELAR_DEPAN          varchar(10)  comment '',
   GELAR_BELAKANG       varchar(10)  comment '',
   JENIS_KELAMIN        char(1)  comment '',
   AGAMA                varchar(10)  comment '',
   ALAMAT_TINGGAL       varchar(100)  comment '',
   NO_HP                varchar(15)  comment '',
   NO_WA                varchar(15)  comment '',
   ID_TELEGRAM          varchar(25)  comment '',
   ID_LINE              varchar(25)  comment '',
   ID_FACEBOOK          varchar(25)  comment '',
   ID_INSTAGRAM         varchar(25)  comment '',
   ID_TWITTER           varchar(25)  comment '',
   ID_YOUTUBE           varchar(25)  comment '',
   EMAIL_GURU           varchar(50)  comment '',
   TEMPAT_LAHIR         varchar(30)  comment '',
   TANGGAL_LAHIR        date  comment '',
   primary key (ID_GURU)
);

/*==============================================================*/
/* Table: JADWAL_PELAJARAN                                      */
/*==============================================================*/
create table JADWAL_PELAJARAN
(
   IDJADWAL             varchar(15) not null  comment '',
   ID_GURU              varchar(12)  comment '',
   KODE_MAPEL           varchar(10)  comment '',
   IDRUANG              varchar(10)  comment '',
   NO_INDUK             varchar(10)  comment '',
   HARIJADWAL           varchar(6)  comment '',
   SESIJADWAL           char(1)  comment '',
   WAKTU_MULAI          time  comment '',
   WAKTU_SELESAI        time  comment '',
   primary key (IDJADWAL)
);

/*==============================================================*/
/* Table: MATA_PELAJARAN                                        */
/*==============================================================*/
create table MATA_PELAJARAN
(
   KODE_MAPEL           varchar(10) not null  comment '',
   NAMA_MAPEL           varchar(30)  comment '',
   BIDANG_MAPEL         varchar(10)  comment '',
   JENIS_MAPEL          varchar(10)  comment '',
   TIPE_MAPEL           varchar(10)  comment '',
   JUMLAH_PERTEMUAN     numeric(2,0)  comment '',
   DURASI_MAPEL         time  comment '',
   primary key (KODE_MAPEL)
);

/*==============================================================*/
/* Table: MURID                                                 */
/*==============================================================*/
create table MURID
(
   NO_INDUK             varchar(10) not null  comment '',
   NAMA_MURID           varchar(25) not null  comment '',
   JEN_KEL              char(1)  comment '',
   AGAMA_MURID          varchar(10)  comment '',
   ALAMAT_RUMAH         varchar(50)  comment '',
   TEMPATLAHIR          varchar(25)  comment '',
   TGL_LAHIR            date  comment '',
   NOHP                 varchar(14)  comment '',
   NOWA                 varchar(14)  comment '',
   IDTELEGRAM           varchar(20)  comment '',
   IDLINE               varchar(20)  comment '',
   IDFACEBOOK           varchar(20)  comment '',
   IDINSTAGRAM          varchar(20)  comment '',
   IDTWITTER            varchar(20)  comment '',
   IDYOUTUBE            varchar(20)  comment '',
   EMAIL                varchar(50)  comment '',
   primary key (NO_INDUK)
);

/*==============================================================*/
/* Table: RUANG_KELAS                                           */
/*==============================================================*/
create table RUANG_KELAS
(
   IDRUANG              varchar(10) not null  comment '',
   NAMA_RUANG           varchar(15) not null  comment '',
   TIPE_RUANG           varchar(10)  comment '',
   UKURAN_RUANG         varchar(10)  comment '',
   KAPASITAS_RUANG      numeric(3,0)  comment '',
   JUMLAH_MEJA          numeric(3,0)  comment '',
   JUMLAH_KURSI         numeric(3,0)  comment '',
   KETERANGAN_RUANG     varchar(200)  comment '',
   KELENGKAPAN_ALAT     varchar(200)  comment '',
   RENOVASI_TERAKHIR    date  comment '',
   primary key (IDRUANG)
);

alter table JADWAL_PELAJARAN add constraint FK_JADWAL_P_MATERI_DI_MATA_PEL foreign key (KODE_MAPEL)
      references MATA_PELAJARAN (KODE_MAPEL) on delete restrict on update restrict;

alter table JADWAL_PELAJARAN add constraint FK_JADWAL_P_MENERIMA__MURID foreign key (NO_INDUK)
      references MURID (NO_INDUK) on delete restrict on update restrict;

alter table JADWAL_PELAJARAN add constraint FK_JADWAL_P_MENGAJAR_GURU_PEN foreign key (ID_GURU)
      references GURU_PENGAJAR (ID_GURU) on delete restrict on update restrict;

alter table JADWAL_PELAJARAN add constraint FK_JADWAL_P_TEMPATKBM_RUANG_KE foreign key (IDRUANG)
      references RUANG_KELAS (IDRUANG) on delete restrict on update restrict;


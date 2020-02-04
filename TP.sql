/*==============================================================*/
/* Nom de SGBD :  MySQL 5.0                                     */
/* Date de création :  04/02/2020 15:57:34                      */
/*==============================================================*/


drop table if exists T_ARTICLES;

drop table if exists T_CATEGORIE;

drop table if exists T_MEMBRE;

/*==============================================================*/
/* Table : T_ARTICLES                                           */
/*==============================================================*/
create table T_ARTICLES
(
   ID_ARTICLE           int not null auto_increment,
   ID_MEMBRE            int not null,
   ID_CATEGORIE         int not null,
   ART_TITRE            varchar(50) not null,
   ART_DESCRIPTION      text not null,
   ART_DATEAJOUT        date not null,
   ART_AUTEUR           varchar(50) not null,
   ART_IMAGEREPOSITORY  varchar(50),
   ART_IMAGEFILENAME    varchar(50),
   primary key (ID_ARTICLE)
);

/*==============================================================*/
/* Table : T_CATEGORIE                                          */
/*==============================================================*/
create table T_CATEGORIE
(
   ID_CATEGORIE         int not null auto_increment,
   CAT_NOM              varchar(40) not null,
   primary key (ID_CATEGORIE)
);

/*==============================================================*/
/* Table : T_MEMBRE                                             */
/*==============================================================*/
create table T_MEMBRE
(
   ID_MEMBRE            int not null auto_increment,
   MEM_NOM              varchar(40) not null,
   MEM_PRENOM           varchar(40) not null,
   MEM_EMAIL            varchar(60) not null,
   MEM_MDP              varchar(255) not null,
   ROLE                 varchar(40),
   primary key (ID_MEMBRE)
);

alter table T_ARTICLES add constraint FK_ASSOCIER foreign key (ID_CATEGORIE)
      references T_CATEGORIE (ID_CATEGORIE) on delete restrict on update restrict;

alter table T_ARTICLES add constraint FK_CREER foreign key (ID_MEMBRE)
      references T_MEMBRE (ID_MEMBRE) on delete restrict on update restrict;


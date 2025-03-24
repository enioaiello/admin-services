/*==============================================================*/
/* Nom de SGBD :  MySQL 5.0                                     */
/* Date de création :  24/03/2025 18:03:56                      */
/*==============================================================*/


drop table if exists CATEGORY;

drop table if exists CONTENT;

drop table if exists INTERACT;

drop table if exists PREFERENCE;

drop table if exists SPECIFY;

drop table if exists USER;

/*==============================================================*/
/* Table : CATEGORY                                             */
/*==============================================================*/
create table CATEGORY
(
   CATEGORY_ID          int not null,
   PREFERENCE_ID        int not null,
   CONTENT_ID           int not null,
   CATEGORY_NAME        varchar(50) not null,
   primary key (CATEGORY_ID)
);

/*==============================================================*/
/* Table : CONTENT                                              */
/*==============================================================*/
create table CONTENT
(
   CONTENT_ID           int not null,
   CONTENT_NAME         varchar(50) not null,
   CONTENT_CATEGORY     int not null,
   CONTENT_DESCRIPTION  text,
   CONTENT_IMAGE        varchar(255),
   CONTENT_PUBLISHER    int not null,
   primary key (CONTENT_ID)
);

/*==============================================================*/
/* Table : INTERACT                                             */
/*==============================================================*/
create table INTERACT
(
   CONTENT_ID           int not null,
   USER_ID              int not null,
   primary key (CONTENT_ID, USER_ID)
);

/*==============================================================*/
/* Table : PREFERENCE                                           */
/*==============================================================*/
create table PREFERENCE
(
   PREFERENCE_ID        int not null,
   PREFERENCE_NAME      varchar(50) not null,
   PREFERENCE_VALUE     varchar(255) not null,
   PREFERENCE_CATEGORY  int not null,
   primary key (PREFERENCE_ID)
);

/*==============================================================*/
/* Table : SPECIFY                                              */
/*==============================================================*/
create table SPECIFY
(
   USER_ID              int not null,
   PREFERENCE_ID        int not null,
   primary key (USER_ID, PREFERENCE_ID)
);

/*==============================================================*/
/* Table : USER                                                 */
/*==============================================================*/
create table USER
(
   USER_ID              int not null,
   USER_FIRSTNAME       varchar(50) not null,
   USER_LASTNAME        varchar(50) not null,
   USER_USERNAME        varchar(50) not null,
   USER_PASSWORD        varchar(255) not null,
   USER_AVATAR          varchar(255) not null,
   USER_PREFERENCES     int not null,
   primary key (USER_ID)
);

alter table CATEGORY add constraint FK_DEFINE foreign key (CONTENT_ID)
      references CONTENT (CONTENT_ID) on delete restrict on update restrict;

alter table CATEGORY add constraint FK_ESTABLISH foreign key (PREFERENCE_ID)
      references PREFERENCE (PREFERENCE_ID) on delete restrict on update restrict;

alter table INTERACT add constraint FK_INTERACT foreign key (USER_ID)
      references USER (USER_ID) on delete restrict on update restrict;

alter table INTERACT add constraint FK_INTERACT2 foreign key (CONTENT_ID)
      references CONTENT (CONTENT_ID) on delete restrict on update restrict;

alter table SPECIFY add constraint FK_SPECIFY foreign key (PREFERENCE_ID)
      references PREFERENCE (PREFERENCE_ID) on delete restrict on update restrict;

alter table SPECIFY add constraint FK_SPECIFY2 foreign key (USER_ID)
      references USER (USER_ID) on delete restrict on update restrict;


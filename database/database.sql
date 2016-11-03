/*---------------------------
----    Admin Table    ----
---------------------------*/

create table Admin
(
  AdminId int auto_increment primary key,
  Name varchar(50) not null,
  Email varchar(50) not null,
  Password varchar(32) not null
) Engine=InnoDB;

/*----------------------------
---- DatabaseType Table ----
----------------------------*/

create table DatabaseType
(
  DatabaseTypeId int auto_increment primary key,
  Type varchar(80) not null,
  ConnectionPattern varchar(255) not null
) Engine=InnoDB;


/*-----------------------
-- Application Table --
-----------------------*/

create table Application
(
  ApplicationId int auto_increment primary key,
  DatabaseUserName varchar(150) not null,
  DatabasePassword varchar(150) not null,
  Name varchar(50) not null,
  Title varchar(255) not null,
  Description text,
  AdminId int not null,
  DatabaseTypeId int not null,
  Constraint fk_Admin_Application foreign key(AdminId) references Admin(AdminId),
  Constraint fk_DatabaseType_Application foreign key(DatabaseTypeId) references DatabaseType(DatabaseTypeId)
) Engine=InnoDB;

/*----------------------------
----  Component Table   ----
----------------------------*/

create table Component
(
  ComponentId int auto_increment primary key,
  Name varchar(150) not null,
  ComponentType Enum('Navigation','ContentPage','Form','CrudPage') not null,
  ApplicationId int not null,
  Constraint fk_Application_Component foreign key(ApplicationId) references Application(ApplicationId)
) Engine=InnoDB;

/*----------------------------
----  Navigation Table   ----
----------------------------*/

create table Navigation
(
  ComponentId int primary key,
  `Key` varchar(150) not null,
  Constraint pk_ComponentNavigation foreign key(ComponentId) references Component(ComponentId)
)Engine=InnoDB;

/*---------------------------------
---- NavigationElement Table ----
---------------------------------*/

create table NavigationElement
(
  ElementId int primary key,
  `Key` varchar(150) not null,
  NavigationId int not null,
  ParentElementId int not null,
  Name varchar(255) not null,
  Url varchar(255) not null,
  Constraint fk_Navigation_NavigationElement foreign key(NavigationId) references Navigation(ComponentId),
  Constraint fk_NavigationElement_NavigationElement foreign key(ParentElementId) references NavigationElement(ElementId)
) Engine=InnoDB;

/*----------------------------
----     Page Table     ----
----------------------------*/

create table `Page`
(
  ComponentId int primary key,
  PageTitle varchar(250) not null,
  MetaKeywords varchar(500),
  MetaDescription varchar(500),
  Constraint pk_Component_Page foreign key(ComponentId) references Component(ComponentId)
) Engine=InnoDB;

/*----------------------------
----  ContentPage Table ----
----------------------------*/

create table ContentPage
(
  ComponentId int primary key,
  CustomUrl varchar(150) not null,
  Content text,
  Constraint pk_Component_ContentPage foreign key(ComponentId) references Component(ComponentId)
) Engine=InnoDB;

/*----------------------------
----     Form Table     ----
----------------------------*/

create table Form
(
  ComponentId int primary key,
  FormName varchar(150),
  SubmitButtonName varchar(150) not null,
  TableName varchar(150) not null,
  Constraint pk_Component_Form foreign key(ComponentId) references Component(ComponentId)
) Engine=InnoDB;

/*----------------------------
----     PrimaryKey Table     ----
----------------------------*/

create table PrimaryKey
(
  PkId int auto_increment primary key,
  FormId int not null,
  PrimaryKey varchar(150) not null,
  KeyType varchar(150) not null,
  IsAutoIncrement tinyint(1) not null default 0,
  Constraint fk_Form_PrimaryKey foreign key(FormId) references Form(ComponentId)
) Engine=InnoDB;

/*-----------------------------
---- FormBasedPage Table ----
-----------------------------*/

create table FormBasedPage
(
  ComponentId int not null,
  FormId int not null,
  Constraint pk_Component_FormBasedPage_Form primary key(ComponentId,FormId),
  Constraint fk_Form_FormBasedPage foreign key(FormId) references Form(ComponentId),
  Constraint fk_Component_FormBasedPage foreign key(ComponentId) references Component(ComponentId)
)Engine=InnoDB;

/*----------------------------
---- PageWithForm Table ----
----------------------------*/

create table PageWithForm
(
  ComponentId int primary key,
  OperationType Enum('View','Insert','Edit'),
  Constraint pk_Component_PageWithForm foreign key(ComponentId) references Component(ComponentId)
) Engine=InnoDB;

/*----------------------------
----   CrudPage Table   ----
----------------------------*/

create table CrudPage
(
  ComponentId int primary key,
  ModuleName varchar(150) not null,
  ControllerName varchar(150) not null,
  Constraint pk_Component_CrudPage foreign key(ComponentId) references Component(ComponentId)
) Engine=InnoDB;

/*----------------------------
---- FrontEndCrud Table ----
----------------------------*/

create table FrontEndCrud
(
  ComponentId int primary key,
  Constraint pk_Component_FrontEndCrud foreign key(ComponentId) references Component(ComponentId)
) Engine=InnoDB;

/*----------------------------
---- BackEndCrud Table ----
----------------------------*/

create table BackEndCrud
(
  ComponentId int primary key,
  Constraint pk_Component_BackEndCrud foreign key(ComponentId) references Component(ComponentId)
) Engine=InnoDB;

/*----------------------------
---- DisplayField Table ----
----------------------------*/

create table DisplayField
(
  DisplayFieldId int auto_increment primary key,
  CrudPageId int not null,
  FieldName varchar(150) not null,
  FieldType varchar(150) not null,
  `Label` varchar(150) not null,
  IsForeign tinyint(1) not null default 0,
  ForeignTable varchar(150),
  ForeignField varchar(150),
  IsAutoIncrement tinyint(1) not null default 0,
  Constraint pk_CrudPage_DisplayField foreign key(CrudPageId) references CrudPage(ComponentId)
) Engine=InnoDB;

/*----------------------------
---- FormField Table ----
----------------------------*/

create table FormField
(
  FormFieldId int auto_increment primary key,
  FormId int not null,
  FieldLabel varchar(150) not null,
  FieldType varchar(150) not null,
  FieldIsRequired tinyint(1) not null default 0,
  BoundFieldName varchar(150),
  Constraint fk_Form_FormField foreign key(FormId) references Form(ComponentId)
) Engine=InnoDB;

/*----------------------------
----    Filter Table    ----
----------------------------*/

create table `Filter`
(
  FilterId int auto_increment primary key,
  FormFieldId int not null,
  FilterName varchar(150) not null,
  Constraint fk_FormField_Filter foreign key(FormFieldId) references FormField(FormFieldId)
) Engine=InnoDB;

/*----------------------------
----  Validator Table   ----
----------------------------*/

create table `Validator`
(
  ValidatorId int auto_increment primary key,
  FormFieldId int not null,
  FilterName varchar(150) not null,
  AllowWhiteSpace tinyint(1) not null default 0,
  IsRegExp tinyint(1) not null default 0,
  RegExpression varchar(150) not null,
  Constraint fk_FormField_Validator foreign key(FormFieldId) references FormField(FormFieldId)
) Engine=InnoDB;
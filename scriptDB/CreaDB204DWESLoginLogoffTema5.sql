create database DB204DWESLoginLogoffTema5;

use DB204DWESLoginLogoffTema5;

create user if not exists 'user204DWESLoginLogoffTema5'@'%' identified by 'paso';

grant all privileges on DB204DWESLoginLogoffTema5.* to 'user204DWESLoginLogoffTema5'@'%';



create table T01_Usuario(
    T01_CodUsuario varchar(40) primary key,
    T01_Password varchar(100),
    T01_DescUsuario varchar(300),
    T01_NumConexiones int,
    T01_FechaHoraUltimaConexion datetime,
    T01_Perfil varchar(100),
    T01_ImagenUsuario varchar(200)    
)engine=innodb;



create table T02_Departamento(
    T02_CodDepartamento varchar(3) primary key,
    T02_DescDepartamento varchar(255),
    T02_FechaCreacionDepartamento datetime,
    T02_VolumenDeNegocio float,
    T02_FechaBajaDepartamento datetime
)engine=innodb;
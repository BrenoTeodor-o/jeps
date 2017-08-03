-- MySQL Script generated by MySQL Workbench
-- Thu Jul 13 11:30:27 2017
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema jeps
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema jeps
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `jeps` DEFAULT CHARACTER SET utf8 ;
USE `jeps` ;

-- -----------------------------------------------------
-- Table `jeps`.`Atleta`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `jeps`.`Atleta` (
  `idAtleta` INT(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`idAtleta`));


-- -----------------------------------------------------
-- Table `jeps`.`ResponsavelInstitucional`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `jeps`.`ResponsavelInstitucional` (
  `idResponsavelInstitucional` INT(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`idResponsavelInstitucional`));


-- -----------------------------------------------------
-- Table `jeps`.`ResponsavelTecnico`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `jeps`.`ResponsavelTecnico` (
  `idResponsavelTecnico` INT(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`idResponsavelTecnico`));


-- -----------------------------------------------------
-- Table `jeps`.`PessoaFisica`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `jeps`.`PessoaFisica` (
  `idPessoaFisica` INT(11) NOT NULL AUTO_INCREMENT,
  `ultimaAlteracao` DATETIME(6) NULL,
  `dataInclusao` DATETIME(6) NOT NULL,
  `nome` VARCHAR(45) NOT NULL,
  `dataNascimento` DATE NOT NULL,
  `cpf` VARCHAR(11) NOT NULL,
  `rg` VARCHAR(20) NOT NULL,
  `telefone` VARCHAR(11) NULL,
  `email` VARCHAR(45) NULL,
  `status` TINYINT NOT NULL,
  `fk_idResponsavel` INT(11) NOT NULL,
  `fk_idAtleta` INT(11) NOT NULL,
  `fk_idResponsavelTecnico` INT(11) NOT NULL,
  PRIMARY KEY (`idPessoaFisica`, `fk_idResponsavel`, `fk_idAtleta`, `fk_idResponsavelTecnico`),
  INDEX `fkPessoaFisicaAtleta` (`fk_idAtleta` ASC),
  INDEX `fkPessoaFisicaResponsavel` (`fk_idResponsavel` ASC),
  INDEX `fkPessoaFisicaResponsavelTecnico` (`fk_idResponsavelTecnico` ASC),
  CONSTRAINT `fk_PessoaFisica_Atleta`
    FOREIGN KEY (`fk_idAtleta`)
    REFERENCES `jeps`.`Atleta` (`idAtleta`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_PessoaFisica_Responsavel1`
    FOREIGN KEY (`fk_idResponsavel`)
    REFERENCES `jeps`.`ResponsavelInstitucional` (`idResponsavelInstitucional`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_PessoaFisica_ResponsavelTecnico1`
    FOREIGN KEY (`fk_idResponsavelTecnico`)
    REFERENCES `jeps`.`ResponsavelTecnico` (`idResponsavelTecnico`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION);


-- -----------------------------------------------------
-- Table `jeps`.`GrupoUsuario`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `jeps`.`GrupoUsuario` (
  `idGrupoUsuario` INT(11) NOT NULL AUTO_INCREMENT,
  `descricao` VARCHAR(45) NOT NULL,
  `status` TINYINT NOT NULL,
  PRIMARY KEY (`idGrupoUsuario`));


-- -----------------------------------------------------
-- Table `jeps`.`Usuario`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `jeps`.`Usuario` (
  `idUsuario` INT(11) NOT NULL AUTO_INCREMENT,
  `login` VARCHAR(20) NOT NULL,
  `senha` VARCHAR(20) NOT NULL,
  `status` TINYINT NOT NULL,
  `fk_idPessoaFisica` INT(11) NOT NULL,
  `fk_idGrupoUsuario` INT(11) NOT NULL,
  PRIMARY KEY (`idUsuario`, `fk_idGrupoUsuario`, `fk_idPessoaFisica`),
  INDEX `fkUsuarioPessoaFisica` (`fk_idPessoaFisica` ASC),
  INDEX `fkUsuarioGrupoUsuario` (`fk_idGrupoUsuario` ASC),
  UNIQUE INDEX `loginUnique` (`login` ASC),
  CONSTRAINT `fk_Usuario_PessoaFisica`
    FOREIGN KEY (`fk_idPessoaFisica`)
    REFERENCES `jeps`.`PessoaFisica` (`idPessoaFisica`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Usuario_GrupoUsuario`
    FOREIGN KEY (`fk_idGrupoUsuario`)
    REFERENCES `jeps`.`GrupoUsuario` (`idGrupoUsuario`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION);


-- -----------------------------------------------------
-- Table `jeps`.`Modalidade`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `jeps`.`Modalidade` (
  `idModalidade` INT(11) NOT NULL AUTO_INCREMENT,
  `modalidade` VARCHAR(45) NOT NULL,
  `sexo` VARCHAR(15) NOT NULL,
  `numeroMaximoAtleta` INT(2) NOT NULL,
  `numeroMinimoAtleta` INT(2) NOT NULL,
  `categoria` VARCHAR(45) NOT NULL,
  `status` TINYINT NOT NULL,
  PRIMARY KEY (`idModalidade`));


-- -----------------------------------------------------
-- Table `jeps`.`MatriculaAtleta`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `jeps`.`MatriculaAtleta` (
  `idMatriculaAtleta` INT(11) NOT NULL AUTO_INCREMENT,
  `dataMatricula` DATETIME(6) NOT NULL,
  `status` VARCHAR(45) NOT NULL,
  `fk_idAtleta` INT(11) NOT NULL,
  PRIMARY KEY (`idMatriculaAtleta`, `fk_idAtleta`),
  INDEX `fkMatriculaAtleta` (`fk_idAtleta` ASC),
  CONSTRAINT `fk_Matricula_Aluno`
    FOREIGN KEY (`fk_idAtleta`)
    REFERENCES `jeps`.`Atleta` (`idAtleta`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION);


-- -----------------------------------------------------
-- Table `jeps`.`Instituicao`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `jeps`.`Instituicao` (
  `idInstituicao` INT(11) NOT NULL AUTO_INCREMENT,
  `ultimaAlteracao` DATETIME(6) NULL,
  `dataInclusao` DATETIME(6) NOT NULL,
  `nome` VARCHAR(45) NOT NULL,
  `cnpj` VARCHAR(14) NOT NULL,
  `cidade` VARCHAR(45) NOT NULL,
  `telefone` VARCHAR(11) NOT NULL,
  `email` VARCHAR(45) NOT NULL,
  `status` TINYINT NOT NULL,
  `fk_idUsuario` INT(11) NOT NULL,
  `fk_idResponsavelInstitucional` INT(11) NOT NULL,
  PRIMARY KEY (`idInstituicao`, `fk_idUsuario`, `fk_idResponsavelInstitucional`),
  INDEX `fkInstituicaoUsuario` (`fk_idUsuario` ASC),
  INDEX `fkInstituicaoResponsavelInstitucional` (`fk_idResponsavelInstitucional` ASC),
  CONSTRAINT `fk_Instituicao_Usuario1`
    FOREIGN KEY (`fk_idUsuario`)
    REFERENCES `jeps`.`Usuario` (`idUsuario`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Instituicao_ResponsavelInstitucional1`
    FOREIGN KEY (`fk_idResponsavelInstitucional`)
    REFERENCES `jeps`.`ResponsavelInstitucional` (`idResponsavelInstitucional`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION);


-- -----------------------------------------------------
-- Table `jeps`.`Curso`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `jeps`.`Curso` (
  `idCurso` INT(11) NOT NULL AUTO_INCREMENT,
  `descricao` VARCHAR(45) NOT NULL,
  `status` TINYINT NOT NULL,
  `fk_idInstituicao` INT(11) NOT NULL,
  PRIMARY KEY (`idCurso`, `fk_idInstituicao`),
  INDEX `fkCursoInstituicao` (`fk_idInstituicao` ASC),
  CONSTRAINT `fk_Curso_Instituicao1`
    FOREIGN KEY (`fk_idInstituicao`)
    REFERENCES `jeps`.`Instituicao` (`idInstituicao`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION);


-- -----------------------------------------------------
-- Table `jeps`.`MatriculaInstituicao`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `jeps`.`MatriculaInstituicao` (
  `idMatriculaInstituicao` INT(11) NOT NULL AUTO_INCREMENT,
  `data` DATETIME(6) NOT NULL,
  `status` TINYINT NOT NULL,
  `fk_idInstituicao` INT(11) NOT NULL,
  `fk_idModalidade` INT(11) NOT NULL,
  PRIMARY KEY (`idMatriculaInstituicao`, `fk_idInstituicao`, `fk_idModalidade`),
  INDEX `fkMatriculaInstituicacaoModalidade` (`fk_idModalidade` ASC),
  INDEX `fkMatriculaInstituicaoInstituicao` (`fk_idInstituicao` ASC),
  CONSTRAINT `fk_Instituicao_has_Modalidade_Instituicao1`
    FOREIGN KEY (`fk_idInstituicao`)
    REFERENCES `jeps`.`Instituicao` (`idInstituicao`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Instituicao_has_Modalidade_Modalidade1`
    FOREIGN KEY (`fk_idModalidade`)
    REFERENCES `jeps`.`Modalidade` (`idModalidade`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION);


-- -----------------------------------------------------
-- Table `jeps`.`Matricula`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `jeps`.`Matricula` (
  `idMatricula` INT(11) NOT NULL,
  `data` DATETIME(6) NOT NULL,
  `status` TINYINT NOT NULL,
  `fk_idAtleta` INT(11) NOT NULL,
  `fk_idModalidade` INT(11) NOT NULL,
  `ResponsavelTecnico_idResponsavelTecnico` INT(11) NOT NULL,
  PRIMARY KEY (`idMatricula`, `fk_idAtleta`, `fk_idModalidade`, `ResponsavelTecnico_idResponsavelTecnico`),
  INDEX `fkMatriculaModalidade` (`fk_idModalidade` ASC),
  INDEX `fkMatriculaAtleta` (`idMatricula` ASC, `fk_idAtleta` ASC),
  INDEX `fkMatriculaResponsavelTecnico` (`ResponsavelTecnico_idResponsavelTecnico` ASC),
  CONSTRAINT `fk_MatriculaAtleta_has_Modalidade_MatriculaAtleta1`
    FOREIGN KEY (`idMatricula` , `fk_idAtleta`)
    REFERENCES `jeps`.`MatriculaAtleta` (`idMatriculaAtleta` , `fk_idAtleta`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_MatriculaAtleta_has_Modalidade_Modalidade1`
    FOREIGN KEY (`fk_idModalidade`)
    REFERENCES `jeps`.`Modalidade` (`idModalidade`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Matricula_ResponsavelTecnico1`
    FOREIGN KEY (`ResponsavelTecnico_idResponsavelTecnico`)
    REFERENCES `jeps`.`ResponsavelTecnico` (`idResponsavelTecnico`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION);


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
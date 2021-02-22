# Formulario-ComboBox-PHP-BancoDeDados
Formulário com ComboBox

Formulário em php com conexão com banco de dados.

Video de inspiração para projeto: https://www.youtube.com/watch?v=2RjFESnjlFA&ab_channel=Celke
                                  https://youtu.be/SvA3zjNTmn4
                                  
                                  
BANCO DE DADOS


CREATE TABLE `estudo`.`alunos` ( `codigo` INT NOT NULL AUTO_INCREMENT , `nome` VARCHAR(250) NOT NULL , `ra` INT NOT NULL , `email` VARCHAR(200) NOT NULL , `turma` INT(3) NOT NULL , PRIMARY KEY (`codigo`)) ENGINE = InnoDB;

CREATE TABLE `estudo`.`turmas` ( `codigo` INT NOT NULL AUTO_INCREMENT , `descricao` VARCHAR(250) NOT NULL , PRIMARY KEY (`codigo`)) ENGINE = InnoDB;

INSERT INTO `turmas` (`codigo`, `descricao`) VALUES ('1', 'Turma A'), ('2', 'Turma B'), ('3', 'Turma C');

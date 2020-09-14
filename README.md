## Instalação
Você pode clonar este repositório OU baixar o .zip


Ao descompactar, é necessário rodar o **composer** pra instalar as dependências e gerar o *autoload*.

## Instalação do Composer
Entre na pasta __Util dentro do projeto e instale o Composer-Setup.exe, identifique o diretorio do seu php, basicamente basta dar um avançar, não precisa marcar a caixa de Developer. Confirme o PATH de arquivos.
para saber se deu certo a instlação abra o prompt pelo terminal e digite composer
se abrir varias informações é pq instalou normalmente.

## Instalando o composer dentro do projeto
Vá até a pasta do projeto, pelo *prompt/terminal* e execute:
> composer install

Depois é só aguardar.

## Configuração
Todos os arquivos de **configuração** e aplicação estão dentro da pasta *src*.

As configurações de Banco de Dados e URL estão no arquivo *src/Config.php*

É importante configurar corretamente a constante *BASE_DIR*:
> const BASE_DIR = '/**PastaDoProjeto**/public';

## Uso
Você deve acessar a pasta *public* do projeto.

O ideal é criar um ***alias*** específico no servidor que direcione diretamente para a pasta *public*.

## Modelo de MODEL
```php
<?php
namespace src\models;
use \core\Model;

class Usuario extends Model {

}
```
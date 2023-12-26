# Projeto API Laravel

Este projeto é uma API desenvolvida em Laravel para testar e demonstrar conhecimentos sobre os relacionamentos entre modelos no Laravel.

## Relacionamentos

Os relacionamentos entre modelos que são demonstrados neste projeto incluem:

1. **Has One**: Este é um tipo de relacionamento onde um modelo possui um único relacionamento com outro modelo.

2. **Has Many**: Este é um tipo de relacionamento onde um modelo possui vários relacionamentos com outro modelo.

3. **Belongs To**: Este é um tipo de relacionamento onde um modelo pertence a outro modelo.

4. **Many To Many**: Este é um tipo de relacionamento onde um modelo tem um relacionamento muitos-para-muitos com outro modelo.

## Instalação

Para instalar e executar este projeto, siga estas etapas:

1. Clone o repositório para a sua máquina local.
2. Navegue até a pasta do projeto.
3. Execute `composer install` para instalar as dependências.
4. Copie o arquivo `.env.example` para `.env` e configure as variáveis de ambiente.
5. Execute `php artisan key:generate` para gerar uma chave de aplicação.
6. Execute `php artisan migrate` para executar as migrações do banco de dados.
7. Execute `php artisan serve` para iniciar o servidor de desenvolvimento.

## Uso

Para usar a API, você pode enviar solicitações HTTP para os endpoints definidos nas rotas da API.

## Contribuição

Contribuições são bem-vindas. Por favor, faça um fork do projeto e crie um pull request com as suas alterações.

## Licença

Este projeto está licenciado sob a licença MIT.

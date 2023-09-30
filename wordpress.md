
# Então, te jogaram pra trampar com WordPress?

Me desculpe pelo trauma, já aconteceu comigo também.

Abaixo você encontrará ajuda para problemas comuns encontrados quando você está trabalhando com essa besta profana e cruel que é o Wordpress

# O arquivo wp-config.php

Esse arquivo é a base de tudo, e consequentemente onde vários problemas começam.

Quando você baixar uma package do site do wordpress.org, ele será acompanhado de um arquivo
`wp-config-sample.php` na raiz, e ele é exatamente o que o nome diz, um exemplo de arquivo de configuração.  
  
Crie uma cópia desse arquivo, nomeie como `wp-config.php` e parta daí. Caso você tenha "herdado" o projeto, e não esteja começando um do zero, consulte o ``wp-config.php`` do servidor caso seja possível, muitas pessoas adicionam código autoral nessa parte para resolver problemas

## Pontos de atenção:

- Geralmente a primeira coisa que você quer fazer é ativar o `TRUE` na constante `WP_DEBUG`, isso vai fazer você receber no front-end mais do que só "seu site está com problemas"
- Atente-se também à variavel `$table_prefix`. Por padrão ela vem com o valor `wp_`, mas alguns projetos podem contar com variações. Certifique-se que esse prefixo casa com o banco de dados que você tem.
- Geralmente a constante `DB_COLLATE` é deixada como uma string vazia mesmo.

# Do banco de dados

Das duas uma: ou você vai receber um dump (arquivo .sql) ou terá que iniciar um projeto do zero. 

Se você receber o dump, importe-o no seu servidor mysql da maneira que preferir, e cheque os prefixos da tabela, caso seja diferente do padrão `wp_`, altere a constante no arquivo `wp-config.php`.

## Pontos de atenção: 

- Após importar uma DB para rodar em localhost, certifique-se de mudar os valores `site_url` e `home` na tabela `wp_options` para a URL do ambiente local.

# Dos Plugins

A maioria dos problemas vão vir daqui. Plugins sem licença, quebrados, desatualizados, nullados e piratas são práticas comuns da exuberante criatura que é o desenvolvedor Wordpress.

Evite depender o máximo possível deles, mas tem alguns dos quais você dificilmente vai se livrar.

## Pontos de Atenção
- Se tudo estiver quebrado, desative todos os plugins, eles costumam ser os culpados
- Se você instalar um novo plugin e ele não estiver funcionando como você quer,
verifique se você adicionou as funções `wp_head()` e `wp_footer()` no tema.
- Evite bloating de plugins, nem tudo precisa ser feito através deles.

## Plugins que não costumam dar tantos problemas:

- [Advanced Custom Fields](https://www.advancedcustomfields.com/)
    - Esse vai estar em quase todos projetos mas não costuma ser o vilão da história.
    - Se torna o vilão quando você recebe um pacote com ele nullado ou sem licença.
- [Yoast](https://yoast.com/) 
    - Em geral não vai te dar problemas, mas pode prejudicar ratings de performance.
- [Contact Form 7](https://wordpress.org/plugins/contact-form-7/)
    - Também não costuma dar problemas em geral, exceto quando combinado com os famosos construtores de página para Wordpress.

Plugins que às vezes dão problemas: 

- [WP Mail SMTP](https://wpmailsmtp.com/)
    - Não é a maneira ideal de configurar o envio de e-mails do seu projeto, fácil de perder tempo testando e tentando resolver problemas dentro dele.
- Plugins de Tradução ([WPML](https://wpml.org/), [Polylang](https://polylang.pro/), etc)
    - Esses costumam ser difíceis de lidar porque geralmente envolem keys e licenças, então espere que eles quebrem assim que você trouxer o site para um ambiente diferente, muitas vezes tem que ser desativados para você fazer o que precisa.

Plugins que sempre vão dar problema: 

- Construtores de página ou layout ([WP Bakery](https://wpbakery.com/), [Elementor](https://elementor.com/), [Revolution Slider](https://www.sliderrevolution.com/), etc)
    - Prefira trabalhar com animais silvestres doentes de raiva do que com esses plugins, eles quebram fácil, tem uma curva de aprendizado muito chata e tiram controle do desenvolvedor.
    - Deus lhe ajude.

# Do Tema

90% das vezes O que você vai fazer quando for mexer com Wordpress, é mexer em ou criar um "tema". Esse tema nada mais é que a parte autoral do seu projeto Wordpress.

## Pontos de atenção: 
- `functions.php` - Onde a maioria dos problemas de tema nasce e morre.
- `style.css` - Onde você talvez encontre alguma documentação.
- [Nessa Página](https://developer.wordpress.org/themes/basics/template-files/) você encontrará uma relação completa dos "nomes comuns" de arquivos que vão estar num tema.
- Caso vá incluir [CSS](https://developer.wordpress.org/reference/functions/wp_enqueue_style/) ou [Javascript](https://developer.wordpress.org/reference/functions/wp_enqueue_script/), certifique-se de usar as funções nativas do Wordpress

# Das Actions e filters

O Wordpress oferece filters e actions para que você possa modificar dados internos no runtime. Esses são callbacks que utilizamos para manipular informações ou realizar snippets de código.

[Nessa página](https://developer.wordpress.org/reference/functions/add_filter/#:~:text=WordPress%20offers%20filter%20hooks%20to,by%20returning%20a%20new%20value.) você encontra uma referência melhor explicada de como tudo exatamente funciona.

(Em expansão)

# Do Git e dos repositórios

Decidimos como estratégia não versionar arquivos "core" do wordpress, basicamente então o que sobra é a pasta `wp-content` - Abaixo um exemplo de `.gitignore`

```Ignore
# Wordpress - ignore core, configuration, examples, uploads and logs.
# https://github.com/github/gitignore/blob/main/WordPress.gitignore

# Core
#
# Note: if you want to stage/commit WP core files
# you can delete this whole section/until Configuration.
/wp-admin/
/wp-content/index.php
/wp-content/languages
/wp-content/plugins/index.php
/wp-content/themes/index.php
/wp-includes/
/index.php
/license.txt
/readme.html
/wp-*.php
/xmlrpc.php
node_modules

# Configuration
!wp-config.php

# Example themes
/wp-content/themes/twenty*/

# Example plugin
/wp-content/plugins/hello.php

# Uploads
# /wp-content/uploads/

# Log files
*.log

# htaccess
/.htaccess

# All plugins
#
# Note: If you wish to whitelist plugins,
# uncomment the next line
# /wp-content/plugins

# All themes
#
# Note: If you wish to whitelist themes,
# uncomment the next line
# /wp-content/themes

# Cache and vendor files

cache/
vendor/
.DS_Store

# wordfence? files 

.security

# Linux / WSL Windows files

**/*Zone.Identifier


# All in one wp migration backup files
ai1wm-backups
```

# Considerações Finais

Se tiver dúvidas, chama o [pai](https://github.com/drunksheep).

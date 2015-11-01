<?php
/**
* @version 0.8.9 $Id: portuguese.php 217 2007-06-18 14:49:07Z schlu $
* @package Eventlist
* @copyright (C) 2005 - 2007 Christoph Lukes
* @license http://www.gnu.org/copyleft/gpl.html GNU/GPL
* @Formal European Portuguese translation by Peter Rom�o
*/

//Frontend
DEFINE("_EVENTS_DATE","Data");
DEFINE("_EVENTS_CLUB","Local");
DEFINE("_EVENTS_CITY","Cidade");
DEFINE("_EVENTS_DETAILS","Detalhes");
DEFINE("_EVENTS_BACK","voltar");
DEFINE("_EVENTS_EVENT","Evento");
DEFINE("_EVENTS_WHEN","Quando:");
DEFINE("_EVENTS_WHERE","Onde:");
DEFINE("_EVENTS_DESC","Descri��o do evento:");
DEFINE("_EVENTS_LOCAT","Localiza��o");
DEFINE("_EVENTS_LOCDESC","Descri��o da localiza��o:");
DEFINE("_EVENTS_DESCALERT","Desculpe, nehuma descri��o dispon�vel");
DEFINE("_EVENTS_COUNTRY_LO","Pa�s:");
DEFINE("_ADMIN_EVENTS_DETA_REDI","Acesso n�o autorizado");
DEFINE("_EVENTS_HOMEPAGE_LO","P�gina Internet:");
DEFINE("_EVENTS_HOMEPAGENO_LO","Nenhuma P�gina Internet dispon�vel");
DEFINE("_EVENTLIST_SHARCHIVE","Mostrar Arquivo");
DEFINE("_EVENTS_MAP","Mostrar mapa de Localiza��o");

//images
DEFINE("_EVENTS_IMAGEEMPT","Seleccione uma imagem para transferir ,por favor");
DEFINE("_EVENTS_IMAGESIZEBIG","Tamanho do ficheiro est� errado");
DEFINE("_EVENTS_IMAGECHARACT","O nome do ficheiro s� pode conter caracteres alfanum�ricos e nenhum espa�o em branco.");
DEFINE("_EVENTS_IMAGEEXIST","A imagem j� existe. Escolha outro nome, por favor.");
DEFINE("_EVENTS_IMAGETYPE","O ficheiro dever� ser do tipo gif, png, jpg, bmp");  //changed in 0.8.3
DEFINE("_EVENTS_IMAGEFAIL","Transfer�ncia falhou");
DEFINE("_ADMIN_EVENTS_CHOOIMAGE","Escolha a imagem:");
DEFINE("_ADMIN_EVENTS_IMAGEUPL","Escolha a imagem para transferir:");
DEFINE("_EVENTS_IMAGEUPLSUCCESS","Transfer�ncia bem sucedida");
DEFINE("_EVENTS_IMAGEUPLNOGD","GD-Library n�o dispon�vel! Desactive a cria��o de imagens miniatura, por favor.");
DEFINE("_EVENTS_IMAGEUPLPNG","Suporte PNG dispon�vel");
DEFINE("_EVENTS_IMAGEUPLNOPNG","Suporte PNG INdispon�vel");
DEFINE("_EVENTS_IMAGEUPLJPG","Suporte JPG dispon�vel");
DEFINE("_EVENTS_IMAGEUPLNOJPG","Suporte JPG INdispon�vel");
DEFINE("_EVENTS_IMAGEUPLGIF","Suporte GIF dispon�vel");
DEFINE("_EVENTS_IMAGEUPLNOGIF","Suporte GIF INdispon�vel");
DEFINE("_ADMIN_EVENTS_IMAGETARGET","Pasta de destino:");
DEFINE("_ADMIN_EVENTS_IMAGEGDVERS","Vers�o GD:");
DEFINE("_ADMIN_EVENTS_IMAGEGDVERSWARN","Nota: O Eventlist requer a vers�o 2 ou posterior do GD-Library para a cria��o de miniaturas. Se n�o tiver suporte GD ou ainda esteja a utilizar a vers�o 1 desactive a cria��o de miniaturas.");

//Backend

//add/edit event
DEFINE("_ADMIN_EVENTS_HEADER_EV","Evento Eventlist");
DEFINE("_ADMIN_EVENTS_DATE","Data do evento:");
DEFINE("_ADMIN_EVENTS_DATE_NOTICE","Formato aaaa-mm-dd !");
DEFINE("_ADMIN_EVENTS_TIME_NOTICE","Formato: hh:mm!");
DEFINE("_ADMIN_EVENTS_CLUB_ID","Local:");
DEFINE("_ADMIN_EVENTS_DEL"," Evento(s) apagado(s)");
DEFINE("_ADMIN_EVENTS_DELFORM","ERRO: Data n�o est� no formato adequado");
DEFINE("_ADMIN_EVENTS_DELFORMT","ERRO: Hora tem o formato errado ou ent�o activou a visualiza��o de hora no espa�o p�blico. Neste caso dever� preencher este campo");
DEFINE("_ADMIN_EVENTS_EMPTY","ERRO: primeiro adicione a local");
DEFINE("_ADMIN_EVENTS_SAVE","Evento guardado.");
DEFINE("_ADMIN_EVENTS_DESCR","Descri��o do evento:");
DEFINE("_ADMIN_EVENTS_DESCR_OPT","opcional");
DEFINE("_ADMIN_EVENTS_DESCR_INTRO","A descri��o do evento");
DEFINE("_ADMIN_EVENTS_TIME","Hora:");
DEFINE("_ADMIN_EVENTS_TITEL","T�tulo do evento:");
DEFINE("_ADMIN_EVENTS_NO_LOC","ERRO: seleccione local ou adicione aqui um local primeiro. Posteriormente poder� adicionar eventos");	//changed in 0.8.3
DEFINE("_ADMIN_EVENTS_ENDTIME","Hora do Fim:");
DEFINE("_ADMIN_EVENTS_ENDTIME_NOTICE","Formato: hh:mm! (opcional)");
DEFINE("_ADMIN_EVENTS_PUBLI","Publicado?");
DEFINE("_ADMIN_EVENTS_CAT_ID","Categoria:");
DEFINE("_ADMIN_EVENTS_SEL_CAT","Seleccione categoria");
DEFINE("_ADMIN_EVENTS_SEL_LOC","Seleccione local");
DEFINE("_ADMIN_EVENTS_CATEMPTY","ERROR: Seleccione a categoria ou adicione uma categoria primeiro. Posteriormente poder� adicionar eventos"); //changed in 0.8.3
DEFINE("_ADMIN_EVENTS_SUC_ARCH"," Evento(s) arquivado(s) com sucesso");
DEFINE("_ADMIN_EVENTS_SUC_PUBL"," Evento(s) publicado(s) com sucesso");
DEFINE("_ADMIN_EVENTS_SUC_UNARCH"," Evento(s) retirado(s) do arquivo com sucesso");
DEFINE("_ADMIN_EVENTS_SUC_UNPUBL"," Evento(s) retirado(s) de publica��o com sucesso");
DEFINE("_ADMIN_EVENTS_OTHER","Outros");
DEFINE("_ADMIN_EVENTS_REGISTRA","Active registos:");

//add/edit location
DEFINE("_ADMIN_EVENTS_HEADER_LO","Localiza��o Eventlist");
DEFINE("_ADMIN_EVENTS_CLUB_LO","Local:");
DEFINE("_ADMIN_EVENTS_CLUBHOME_LO","P�gina Internet do Local:");
DEFINE("_ADMIN_EVENTS_CLUBHOME_NOTICE_LO","URL dever� estar no formato http://www.google.pt!");		//changed in 0.8.3
DEFINE("_ADMIN_EVENTS_CITY_LO","Cidade:");
DEFINE("_ADMIN_EVENTS_DEL_LO", "ERRO: existe no m�nimo um evento neste local");
DEFINE("_ADMIN_EVENTS_DELYES_LO", " Localiza��o(�es) apagada(s)");
DEFINE("_ADMIN_EVENTS_SAVECLUB_LO","ERRO: adicione Local");
DEFINE("_ADMIN_EVENTS_SAVEHOMEP_LO","ERROR: adicione p�gina internet");
DEFINE("_ADMIN_EVENTS_SAVETOWN_LO","ERROR: adicione cidade");
DEFINE("_ADMIN_EVENTS_SAVE_LO","Local guardado");
DEFINE("_ADMIN_EVENTS_DESCR_LO","Descri��o do local");
DEFINE("_ADMIN_EVENTS_DESCR_OPT_LO","opcional");
DEFINE("_ADMIN_EVENTS_DESCR_INTRO_LO","A Descri��o do local");
DEFINE("_ADMIN_EVENTS_CLUBSTREET_LO","Rua:");
DEFINE("_ADMIN_EVENTS_CLUBPLZ_LO","C�d. Postal:");
DEFINE("_ADMIN_EVENTS_CLUBCOUNTRY_LO","Pa�s (PT,US,UK,DE,CH, etc.):");		//changed in 0.8.3
DEFINE("_ADMIN_EVENTS_SAVEADRESS_LO","ERRO: Activou uma das seguintes op��es: mostrar hiperliga��o para map24, mostrar endere�o. Desactive estas op��es se n�o quiser preencher estes campos de endere�o");		//changed in 0.8.3
DEFINE("_ADMIN_EVENTS_OPTIONAL_LO","* s�o campos facultativos. Nota: Os campos de endere�o s� s�o facultativos caso tenha desactivado a funcionalidade de map24!");
DEFINE("_ADMIN_EVENTS_SUC_PUBL_LO"," Local(ais) publicado(s) com sucesso");
DEFINE("_ADMIN_EVENTS_SUC_UNPUBL_LO"," Local(ais) retirados de publica��o com sucesso");
DEFINE("_ADMIN_EVENTS_ADRESSDET","Detalhes do endere�o");
//list events
DEFINE("_ADMIN_EVENTS_DATE_LI_EV","Data");
DEFINE("_ADMIN_EVENTS_CLUB_LI_EV","Local");
DEFINE("_ADMIN_EVENTS_CLUBHOME_LI_EV","URL Evento");
DEFINE("_ADMIN_EVENTS_CITY_LI_EV","Cidade");
DEFINE("_ADMIN_EVENTS_LIMITBOX_LI_EV","Mostrar: ");
DEFINE("_ADMIN_EVENTS_TITEL_LI_EV","T�tulo do Evento");
DEFINE("_ADMIN_EVENTS_TIME_LI_EV","Hora do Evento");
DEFINE("_ADMIN_EVENTS_PUBLISH_LI_EV","Publicado");
DEFINE("_ADMIN_EVENTS_USERDELI_LI_EV","Evento de Utilizador?");
DEFINE("_ADMIN_EVENTS_CAT_LI_EV","Categoria");
DEFINE("_ADMIN_EVENTS_SEARCH_LI_EV","Pesquisa:");

//list locations
DEFINE("_ADMIN_EVENTS_CLUB_LI_LO","Local");
DEFINE("_ADMIN_EVENTS_CLUBHOME_LI_LO","URL Evento");
DEFINE("_ADMIN_EVENTS_CITY_LI_LO","Cidade");
DEFINE("_ADMIN_EVENTS_ORDER_LI_LO","Reordenar");

//Frontend deliver events
DEFINE("_ADMIN_EVENTS_DELIVNAME","O Seu Nome:");
DEFINE("_ADMIN_EVENTS_DELIVNAME_DESC","Adicione o seu nome aqui, por favor");
DEFINE("_ADMIN_EVENTS_DELIVMAIL","O seu endere�o e-mail:");
DEFINE("_ADMIN_EVENTS_DELIVMAIL_DESC","Adicione o seu endere�o de e-mail aqui, por favor");
DEFINE("_EVENTS_DELIVER","Entregue o Evento");
DEFINE("_EVENTS_VALIDATE","ERRO: Preencha todos os campos, por favor");
DEFINE("_ADMIN_EVENTS_DELIV_REDI","A entrega de eventos n�o est� permitida");		//changed in 0.8.3
DEFINE("_EVENTS_DELIVMAILBOD_1"," Recebeu um pedido do utilizador ");
DEFINE("_EVENTS_DELIVMAILBOD_2"," Endere�o e-mail utilizador: ");
DEFINE("_EVENTS_DELIVMAILBOD_3"," IP - Utilizador: ");
DEFINE("_EVENTS_DELIVMAILBOD_4"," Hora pedido: ");
DEFINE("_EVENTS_DELIVMAILBOD_5"," T�tulo do evento: ");
DEFINE("_EVENTS_DELIVMAILBOD_6"," Data do evento: ");
DEFINE("_EVENTS_DELIVMAILBOD_7"," hora do evento: ");
DEFINE("_EVENTS_DELIVMAILBOD_8"," Local: ");
DEFINE("_EVENTS_DELIVMAILBOD_9"," Descri��odo evento: ");
DEFINE("_EVENTS_DELIVMAILBOD_10"," : Novo evento ");
DEFINE("_EVENTLIST_DELIVER","Submeta novo evento");
DEFINE("_EVENTLIST_BACK","voltar");
DEFINE("_ADMIN_EVENTS_DELMAILFORM","ERRO: E-mail tem formato errado!");
DEFINE("_ADMIN_EVENTS_DELTITLLEN","ERRO: T�tulo demasiado longo!");
DEFINE("_ADMIN_EVENTS_DELNAMLEN","ERRO: Nome demasiado longo!");
DEFINE("_EVENTS_DELTEXTARHTML","HTML n�o � permitido!");
DEFINE("_EVENTS_RESTZ","dispon�vel");
DEFINE("_EVENTS_RESTZAKT","refrescar");
DEFINE("_EVENTS_DEL_DATE_EMPT","Adicione data, por favor!");
DEFINE("_EVENTS_DEL_TIME_EMPT","Adicione hora, por favor!");
DEFINE("_EVENTS_DEL_TITEL_EMPT","Adicione t�tulo, por favor!");
DEFINE("_EVENTS_DEL_CATEG_EMPT","Escolha uma categoria, por favor!");
DEFINE("_EVENTS_DEL_LOCAT_EMPT","Escolha um local, por favor!");
DEFINE("_EVENTS_DEL_TIME_FORM","ERRO: Hora tem o formato errado");

//Frontend deliver location
DEFINE("_EVENTLIST_DELIVER_LOC","Submeta novo local");
DEFINE("_EVENTS_DELIVMAILLOCBOD_1"," Recebeu um pedido do utilizador ");		//changed in 0.8.3
DEFINE("_EVENTS_DELIVMAILLOCBOD_2"," Endere�o e-mail utilizador: ");
DEFINE("_EVENTS_DELIVMAILLOCBOD_3"," IP - Utilizador: ");
DEFINE("_EVENTS_DELIVMAILLOCBOD_4"," Hora pedido: ");
DEFINE("_EVENTS_DELIVMAILLOCBOD_5"," Local: ");
DEFINE("_EVENTS_DELIVMAILLOCBOD_6"," URL Local: ");
DEFINE("_EVENTS_DELIVMAILLOCBOD_7"," Rua: ");
DEFINE("_EVENTS_DELIVMAILLOCBOD_8"," C�d. Postal: ");
DEFINE("_EVENTS_DELIVMAILLOCBOD_9"," Cidade: ");
DEFINE("_EVENTS_DELIVMAILLOCBOD_10"," C�d. Pa�s: ");
DEFINE("_EVENTS_DELIVMAILLOCBOD_11"," Descri��o: ");
DEFINE("_EVENTS_DELIVMAILLOCBOD_12"," : Novo local ");
DEFINE("_EVENTS_DELIVER_LOC","Submeter local");
DEFINE("_EVENTS_DELURLLOCFORM","URL demsiado longo");
DEFINE("_EVENTS_DELSTREETLOCFORM","Rua demasiado longo");
DEFINE("_EVENTS_DELPLZLOCFORM","C�d. Postal demasiado longo");
DEFINE("_EVENTS_DELCITYLOCFORM","Cidade demsiado longo");
DEFINE("_EVENTS_DELCOUNTRYLOCFORM","C�d. Pa�s demsiado longo");
DEFINE("_EVENTS_DELURLLOCFORM2","ERROR: URL tem o formato errado!");
DEFINE("_EVENTS_DEL_LOC_STREET_EMPT","ERRO: Preencha a Rua, por favor!");
DEFINE("_EVENTS_DEL_LOC_PLZ_EMPT","ERRO: Preencha o C�d. Postal, por favor!");
DEFINE("_EVENTS_DEL_LOC_COUNTRY_EMPT","ERRO: Preencha o C�d. de Pa�s, por favor!");

//settings
DEFINE("_ADMIN_EVENTS_SETT_HEADER","Op��es Eventlist");
DEFINE("_ADMIN_EVENTS_SETT_SAVE","Op��es guardadas com sucesso");
DEFINE("_ADMIN_EVENTS_SETT_DELOLD","Manusear eventos antigos:");
DEFINE("_ADMIN_EVENTS_SETT_DELOLD1","N�o fazer nada");
DEFINE("_ADMIN_EVENTS_SETT_DELOLD2","Apagar eventos antigos");
DEFINE("_ADMIN_EVENTS_SETT_DELOLD3","Arquivar eventos antigos");
DEFINE("_ADMIN_EVENTS_SETT_DELOLD_DESC","Apagar ou arquivar eventos antigos automaticamente.");
DEFINE("_ADMIN_EVENTS_SETT_DELOLDNR","N�mero de dias:");
DEFINE("_ADMIN_EVENTS_SETT_DELOLDNR_DESC","N�mero de dias no passado que n�o ser�o apagados ou arquivados. Isto n�o tem efeito nenhum se a op��o anterior estiver desactivada.");
DEFINE("_ADMIN_EVENTS_SETT_EVNR","N�mero de Eventos na P�gina Inicial:");
DEFINE("_ADMIN_EVENTS_SETT_EVNR_DESC","N�mero de eventos a mostrar na p�gina inicial.");
DEFINE("_ADMIN_EVENTS_SETT_MAPID","O seu identificador Map24:");
DEFINE("_ADMIN_EVENTS_SETT_MAPID_DESC","Dever� registar-se no Map24 para obter um identificador.");
DEFINE("_ADMIN_EVENTS_SETT_SHOWTIME","Mostrar hora:");
DEFINE("_ADMIN_EVENTS_SETT_SHOWTIME_DESC","Mostrar hora na p�gina inicial.");
DEFINE("_ADMIN_EVENTS_SETT_SHOWTITEL","Mostrar t�tulo:");
DEFINE("_ADMIN_EVENTS_SETT_SHOWTITEL_DESC","Mostrar o t�tulo do evento na p�gina inicial.");
DEFINE("_ADMIN_EVENTS_SETT_SHOWLOC","Mostrar Local/Localiza��o:");
DEFINE("_ADMIN_EVENTS_SETT_SHOWLOC_DESC","Mostrar Local/Localiza��o na p�gina inicial.");
DEFINE("_ADMIN_EVENTS_SETT_SHOWCITY","Mostrar cidade:");
DEFINE("_ADMIN_EVENTS_SETT_SHOWCITY_DESC","Mostrar cidade na p�gina inicial.");
DEFINE("_ADMIN_EVENTS_SETT_SHOWLINKMAP","Mostrar hiperliga��o para o mapa:");
DEFINE("_ADMIN_EVENTS_SETT_SHOWLINKMAP_DESC","Mostrar hiperliga��o para o mapa na p�gina de detalhes. Nota: Necessita introduzir o seu identificador map24 se escolher este servi�o.");
DEFINE("_ADMIN_EVENTS_SETT_SHOWHEADER","Mostrar cabe�alho:");
DEFINE("_ADMIN_EVENTS_SETT_SHOWHEADER_DESC","Mostrar cabe�alho na p�gina inicial.");
DEFINE("_ADMIN_EVENTS_SETT_SHOWINTRO","Mostrar texto de introdu��o:");
DEFINE("_ADMIN_EVENTS_SETT_SHOWINTRO_DESC","Mostrar o texto de introdu��o na p�gina inicial.");
DEFINE("_ADMIN_EVENTS_SETT_INTROT","Texto de Introdu��o para a Lista de Eventos:");
DEFINE("_ADMIN_EVENTS_SETT_INTROT_DESC","Este texto ser� apresentado acima das listagens na p�gina principal.");
DEFINE("_ADMIN_EVENTS_SETT_TABLW","Largura da tabela em % :");
DEFINE("_ADMIN_EVENTS_SETT_TABLW_DESC","Largura da listagem na p�gina inicial.");
DEFINE("_ADMIN_EVENTS_SETT_DATEC","Largura da Coluna de Data em %:");
DEFINE("_ADMIN_EVENTS_SETT_DATEC_DESC","Largura da Coluna de Data.");
DEFINE("_ADMIN_EVENTS_SETT_CNAME","Nome por medida:");
DEFINE("_ADMIN_EVENTS_SETT_CNAME_DESC","Mude isto para o que quiser.");
DEFINE("_ADMIN_EVENTS_SETT_TITELW","Largura da coluna de t�tulo em %:");
DEFINE("_ADMIN_EVENTS_SETT_TITELW_DESC","Largura da coluna de t�tulo (deixe em branco se o tiver desactivado)");
DEFINE("_ADMIN_EVENTS_SETT_INFOB","Largura da coluna do bot�o de informa��o em %:");
DEFINE("_ADMIN_EVENTS_SETT_INFOB_DESC","Largura da coluna do bot�o de informa��o");
DEFINE("_ADMIN_EVENTS_SETT_LOCA","Largura da coluna do local em %:");
DEFINE("_ADMIN_EVENTS_SETT_LOCA_DESC","Largura da coluna do local (deixe em branco se o tiver desactivado)");
DEFINE("_ADMIN_EVENTS_SETT_CITYW","Largura da coluna da cidade em %:");
DEFINE("_ADMIN_EVENTS_SETT_CITYW_DESC","Largura da coluna da cidade (deixe em branco se o tiver desactivado)");
DEFINE("_ADMIN_EVENTS_SETT_UNWR","Escrita do ficheiro de configura��o n�o permitida!");
DEFINE("_ADMIN_EVENTS_SETT_FORDATE","Formato da data:");
DEFINE("_ADMIN_EVENTS_SETT_FORDATE_DESC","Formato da data utilizando a syntaxe do strftime em PHP, por exemplo: %d.%m.%Y. Mais informa��o: ");
DEFINE("_ADMIN_EVENTS_SETT_FORTIME","Formato hora:");
DEFINE("_ADMIN_EVENTS_SETT_FORTIME_DESC","Formato da hora utilizando a syntaxe do strftime em PHP, por exemplo:%H.%M. Mais informa��o: ");
DEFINE("_ADMIN_EVENTS_SETT_FORTIMENAME","Nome:");
DEFINE("_ADMIN_EVENTS_SETT_FORTIMENAME_DESC","Preencha &quot;h&quot; or &quot;Hora&quot; por exemplo. Isto ser� apresentado antes da hora no espa�o p�blico. Deixe em branco caso n�o precise.");		//changed in 0.8.3
DEFINE("_ADMIN_EVENTS_SETT_SHOWDETAILS","Mostrar hiperliga��o para a p�gina de detalhe:");
DEFINE("_ADMIN_EVENTS_SETT_SHOWDETAILS_DESC","Mostrar hiperliga��o para a p�gina de detalhes e onde? (Hiperliga��o no t�tulo s� funcionar� se a mostrar t�tulo tenha sido atribu�do sim, �cones s� aparecer�o caso tenha definido a largura nos atributos de apresenta��o)");		//changed in 0.8.3
DEFINE("_ADMIN_EVENTS_SETT_SHOWTIMEDET_DESC","Mostrar hora na p�gina de detalhes.");
DEFINE("_ADMIN_EVENTS_SETT_SHOWDETEVDESC","Mostrar descri��o do evento:");
DEFINE("_ADMIN_EVENTS_SETT_SHOWDETEVDESC_DESC","Mostrar descri��o do evento na p�gina de detalhes.");
DEFINE("_ADMIN_EVENTS_SETT_SHOWDETEVTITEL","Mostrar t�tulo do evento:");
DEFINE("_ADMIN_EVENTS_SETT_SHOWDETEVTITEL_DESC","Mostrar t�tulo do evento na p�gina de detalhes.");
DEFINE("_ADMIN_EVENTS_SETT_SHOWDETEVADRESS","Mostrar endere�o do local:");
DEFINE("_ADMIN_EVENTS_SETT_SHOWDETEVADRESS_DESC","Mostrar endere�o do local na p�gina de detalhes.");
DEFINE("_ADMIN_EVENTS_SETT_SHOWDETLOCDESC","Mostrar descri��o do evento:");
DEFINE("_ADMIN_EVENTS_SETT_SHOWDETLOCDESC_DESC","Mostrar descri��o do evento na p�gina de detalhes.");
DEFINE("_ADMIN_EVENTS_SETT_SHOWLINKCLUB","Mostrar hiperliga��o para v�r localiza��o:");
DEFINE("_ADMIN_EVENTS_SETT_SHOWLINKCLUB_DESC","Mostrar hiperliga��o para v�r localiza��o na p�gina de detalhes.");
DEFINE("_ADMIN_EVENTS_SETT_SHOWDETLINKCLUB","Mostrar hiperliga��o para a localiza��o:");
DEFINE("_ADMIN_EVENTS_SETT_SHOWDETLINKCLUB_DESC","Mostrar hiperliga��o para a localiza��o na p�gina de detalhes.");
DEFINE("_ADMIN_EVENTS_SETT_NEWDEL","Eventos Novos de utilizadores:");
DEFINE("_ADMIN_EVENTS_SETT_NEWDEL_DESC","Permite aos utilizadores submeter novos eventos no espa�o p�blico e determinar o posto do utilizador.");
DEFINE("_ADMIN_EVENTS_SETT_NEWDELMAIL","E-mail aquando de uma nova submiss�o de utilizador:");
DEFINE("_ADMIN_EVENTS_SETT_NEWDELMAIL_DESC","Informa o admin via e-mail sobre novos eventos submetidos pelos utilizadores?");
DEFINE("_ADMIN_EVENTS_SETT_NEWDELMAIL1","destinat�rio de e-mail:");
DEFINE("_ADMIN_EVENTS_SETT_NEWDELMAIL1_DESC","O endere�o de e-mail da pessoa que deve receber a informa��o por e-mail.");
DEFINE("_ADMIN_EVENTS_SETT_NEWDELMAIL2","CC: destinat�rio de c�pia de e-mail:");
DEFINE("_ADMIN_EVENTS_SETT_NEWDELMAIL2_DESC","O endere�o de e-mail da segunda pessoa que deve receber a informa��o por e-mail (opcional).");
DEFINE("_ADMIN_EVENTS_SETT_DATDESCLIMIT","Comprimento M�x. do evento e da descri��o de evento.");
DEFINE("_ADMIN_EVENTS_SETT_DATDESCLIMIT_DESC","Comprimento M�x. do evento e da descri��o de evento. Se o comprimento da descri��o f�r demasido longo, a descri��o ser� truncada e a nota [truncado] ser� adicionada.");		//changed in 0.8.3
DEFINE("_ADMIN_EVENTS_SETT_SHOWDET1","Detalhes desligados");
DEFINE("_ADMIN_EVENTS_SETT_SHOWDET2","Hiperliga��o no t�tulo");
DEFINE("_ADMIN_EVENTS_SETT_SHOWDET3","Hiperliga��o no �cone");
DEFINE("_ADMIN_EVENTS_SETT_SHOWDET4","Ambos");
DEFINE("_ADMIN_EVENTS_SETT_AUTOPUB","Autopublica��o?");
DEFINE("_ADMIN_EVENTS_SETT_AUTOPUB_DESC","Publicar Eventos atomaticamente??");
DEFINE("_ADMIN_EVENTS_SETT_NEWDELLOC","Locais novos pelos utilizadores:");
DEFINE("_ADMIN_EVENTS_SETT_NEWDELLOC_DESC","Permite aos utilizadores submeter novos locais a partir do espa�o p�blico e determinar o posto de utilizador.");
DEFINE("_ADMIN_EVENTS_SETT_AUTOPUBLOCS_DESC","Publicar Locais automaticamente?");
DEFINE("_ADMIN_EVENTS_SETT_MAILINF1","Desligado");
DEFINE("_ADMIN_EVENTS_SETT_MAILINF2","S� novos eventos");
DEFINE("_ADMIN_EVENTS_SETT_MAILINF3","S� novos locais");
DEFINE("_ADMIN_EVENTS_SETT_MAILINF4","Ambos");
DEFINE("_ADMIN_EVENTS_SETT_SHOWCAT","Mostrar categoria:");
DEFINE("_ADMIN_EVENTS_SETT_SHOWCAT_DESC","Mostrar categria na p�gina inicial.");
DEFINE("_ADMIN_EVENTS_SETT_CATW","Largura da coluna da categoria em %:");
DEFINE("_ADMIN_EVENTS_SETT_CATW_DESC","Largura da coluna da categoria (deixe em branco se a tiver desactivado)");
DEFINE("_ADMIN_EVENTS_SETT_VIEW","Escolha a apresenta��o por omiss�o na p�gina inicial:");
DEFINE("_ADMIN_EVENTS_SETT_VIEW1","Ver Listagem Simples");
DEFINE("_ADMIN_EVENTS_SETT_VIEW2","Listagem Simples por Categorias");
DEFINE("_ADMIN_EVENTS_SETT_VIEW3","Listagem Detalhada por Categorias");
DEFINE("_ADMIN_EVENTS_SETT_VIEW4","Marcador de Posi��o2");		//changed in 0.8.3
DEFINE("_ADMIN_EVENTS_SETT_VIEW_DESC","Escolha aqui a apresenta��o por omiss�o na p�gina inicial. 'Ver Listagem Simples' � equivalente � apresenta��o antiga.");
DEFINE("_ADMIN_EVENTS_SETT_NEWDELREC_DESC","Permitir acesso aos grupos filhos tamb�m? Caso escolha n�o, o acesso � restrito ao grupo seleccionado. Nota: Administradores t�m sempre acesso.");
DEFINE("_ADMIN_EVENTS_SETT_NEWDELREC","Recursivo:");
DEFINE("_ADMIN_EVENTS_SETT_IMAGESIZE","Tamanho M�x. de ficheiro de imagem:");
DEFINE("_ADMIN_EVENTS_SETT_IMAGESIZE_DESC","Tamanho M�x. de ficheiro de imagem em kb");
DEFINE("_ADMIN_EVENTS_SETT_IMAGEHIGHT","Altura M�x. da imagem miniatura:");
DEFINE("_ADMIN_EVENTS_SETT_IMAGEHIGHT_DESC","Altura M�x. da imagem da miniatura e da category");
DEFINE("_ADMIN_EVENTS_SETT_IMAGEWIDTH","Largura M�x. da imagem miniatura:");
DEFINE("_ADMIN_EVENTS_SETT_IMAGEWIDTH_DESC","Largura M�x. da imagem da miniatura e da category");
DEFINE("_ADMIN_EVENTS_SETT_IMAGEPROB","Manter proporcionalidade:");
DEFINE("_ADMIN_EVENTS_SETT_IMAGEPROB_DESC","Manter propor��es ou alterar tamanho?");
DEFINE("_ADMIN_EVENTS_SETT_GDSTATUS","Estado: ");
DEFINE("_ADMIN_EVENTS_SETT_GDDISABLE","Activar imagens miniatura:");
DEFINE("_ADMIN_EVENTS_SETT_GDDISABLE_DESC","Desactive isto se o estado mostrar que a GD-Library n�o est� dispon�vel ou caso s� tenha a vers�o 1.");
DEFINE("_ADMIN_EVENTS_SETT_IMAGEENAB","Transfer�ncia de imagens:");
DEFINE("_ADMIN_EVENTS_SETT_IMAGEENAB1","Activada");
DEFINE("_ADMIN_EVENTS_SETT_IMAGEENAB2","Opcional");
DEFINE("_ADMIN_EVENTS_SETT_IMAGEENAB3","Obrigat�ria");
DEFINE("_ADMIN_EVENTS_SETT_IMAGEENAB_DESC","A transfer�ncia de imagens est� desactivada ou � opcional ou � obrigat�ria por parte dos utilizadores");
DEFINE("_ADMIN_EVENTS_SETT_IMAGECHMOD","Chmod para imagens:");
DEFINE("_ADMIN_EVENTS_SETT_IMAGECHMOD_DESC","Introduza aqui as permiss�es que deseja dar �s imagens. Exemplo 0740");	//changed in 0.8.3
DEFINE("_ADMIN_EVENTS_SETT_HEAD1","Manuseamento de eventos");
DEFINE("_ADMIN_EVENTS_SETT_HEAD2","Visualiza��o - Op��es");
DEFINE("_ADMIN_EVENTS_SETT_HEAD3","Intro");
DEFINE("_ADMIN_EVENTS_SETT_HEAD4","AC - Eventos");
DEFINE("_ADMIN_EVENTS_SETT_HEAD5","AC - Locais");
DEFINE("_ADMIN_EVENTS_SETT_HEAD6","Locais");
DEFINE("_ADMIN_EVENTS_SETT_HEAD7","Descri��o - Comprimento");
DEFINE("_ADMIN_EVENTS_SETT_HEAD8","Manuseamento E-mail");
DEFINE("_ADMIN_EVENTS_SETT_HEAD9","Mnuseamento Imagens");
DEFINE("_ADMIN_EVENTS_SETT_HEAD10","Espa�o P�blico");
DEFINE("_ADMIN_EVENTS_SETT_HEAD11","Eventos");
DEFINE("_ADMIN_EVENTS_SETT_HEAD12","Op��es Gerais de Apresenta��o");	//changed in 0.8.3
DEFINE("_ADMIN_EVENTS_SETT_HEAD13","Largura da tabela");
DEFINE("_ADMIN_EVENTS_SETT_HEAD14","Coluna Data");
DEFINE("_ADMIN_EVENTS_SETT_HEAD15","Coluna T�tulo");
DEFINE("_ADMIN_EVENTS_SETT_HEAD16","Coluna Info");
DEFINE("_ADMIN_EVENTS_SETT_HEAD17","Coluna Local");
DEFINE("_ADMIN_EVENTS_SETT_HEAD18","Coluna Cidade");
DEFINE("_ADMIN_EVENTS_SETT_HEAD19","Coluna Categoria");
DEFINE("_ADMIN_EVENTS_SETT_HEADREG1","Integra��o");
DEFINE("_ADMIN_EVENTS_SETT_COMM_SOL","Escolha a Solu��o de Comunidade:");
DEFINE("_ADMIN_EVENTS_SETT_COMM_SOL1","N�o utilizar nenhma");
DEFINE("_ADMIN_EVENTS_SETT_COMM_SOL2","CB / CBE");	//changed in 0.8.3
DEFINE("_ADMIN_EVENTS_SETT_COMM_SOL_DESC","Escolha a solu��o de constru��o de comunidade que utiliza. Community builder de Joomlapolis ou o Community Builder Enhanced de www.kolloczek.com");	//changed in 0.8.3
DEFINE("_ADMIN_EVENTS_SETT_HEADREG2","Op��es Solu��o Comunidade");
DEFINE("_ADMIN_EVENTS_SETT_COMM_OPTION","Escolha op��es de integra��o:");
DEFINE("_ADMIN_EVENTS_SETT_COMM_OPTION1","Sem integra��o");
DEFINE("_ADMIN_EVENTS_SETT_COMM_OPTION2","Hiperliga��o para perfil");
DEFINE("_ADMIN_EVENTS_SETT_COMM_OPTION3","Hiperliga��o para perfil e apresenta��o de avatar");
DEFINE("_ADMIN_EVENTS_SETT_COMM_OPTION_DESC","Escolha o tipo de integra��o. Eventlist suporta a apresenta��o do Avatar e a gera��o de hiperliga��es para o perfil do utilizador que se tenha registado num Evento");
DEFINE("_ADMIN_EVENTS_SETT_HEADREG3","Aten��o");
DEFINE("_ADMIN_EVENTS_SETT_COMM_NOTES","Eventlist suporta o componente AKReservation caso necessite registos mais detalhados. Para tanto, basta simplesmente adicionar o gatilho mambot no campo da descri��o do evento listado. Hiperliga��o: ");
DEFINE("_ADMIN_EVENTS_SETT_MAP_OPTION1","Nenhum servi�o de mapa");
DEFINE("_ADMIN_EVENTS_SETT_MAP_OPTION2","Map 24");
DEFINE("_ADMIN_EVENTS_SETT_MAP_OPTION3","Google Map");
DEFINE("_ADMIN_EVENTS_SETT_HIDELOC","Esconder Informa��o do Local");
DEFINE("_ADMIN_EVENTS_SETT_HIDELOC_DESC","Esconder completamente os detalhes da localiza��o. Todas as outras op��es para os detalhes deixar�o de surtir efeito.");
DEFINE("_ADMIN_EVENTS_SETT_WARNING","!! Verifica as op��es do teu m�dulo! Active isto s� no caso de o ter desactivado no seu m�dulo. N�o o utilize duas vezes!!");	//changed in 0.8.3
DEFINE("_ADMIN_EVENTS_SETT_INFOBUT_WARNING","!! Apague a largura  se utilizar uma hiperliga��o para a p�gina de detalhes mediante o t�tulo ou se n�o utilizar nenhuma hiperliga��o !!");
DEFINE("_ADMIN_EVENTS_SETT_CATLINK","Mostrar hiperliga��o para a vissualiza��o por categorias:");
DEFINE("_ADMIN_EVENTS_SETT_CATLINK_DESC","Mostrar hiperliga��o para a vissualiza��o por categorias na p�gina inicial.");
DEFINE("_ADMIN_EVENTS_SETT_HEADREG4","Espa�o P�blico:");
DEFINE("_ADMIN_EVENTS_SETT_COMM_FRO_RE","Permitir registos:");
DEFINE("_ADMIN_EVENTS_SETT_COMM_FRO_RE_DESC","Permitir aos utilizadores escolher se querem ou n�o permitir registos nos Eventos que submetem ou utilizar os atributos por omiss�o");
DEFINE("_ADMIN_EVENTS_SETT_COMM_FRO_UNRE","Permitir anular registos:");
DEFINE("_ADMIN_EVENTS_SETT_COMM_FRO_UNRE_DESC","Permitir aos utilizadores escolher se querem ou n�o permitir a anula��o de registos nos Eventos que submetem ou utilizar os atributos por omiss�o");

//Categories
DEFINE("_ADMIN_CATEGORIES_NAME","Nome");
DEFINE("_ADMIN_CATEGORIES_PUBLISH","Publicar?");
DEFINE("_ADMIN_CATEGORIES_ORDER","Reordenar");
DEFINE("_ADMIN_CATEGORIES_PUBLI","Publicar:");
DEFINE("_ADMIN_CATEGORIES_DESCR_OPT_LO","(opcional)");
DEFINE("_ADMIN_CATEGORIES_DESCR_INTRO_LO","A descri��o da Categoria");
DEFINE("_ADMIN_CATEGORIES_DESCR_LO","Descri��o da categoria:");
DEFINE("_ADMIN_EVENTS_DEL_CAT","ERRO: no m�n. existe um evento atribu�do a esta categoria");
DEFINE("_ADMIN_CATEGORIES_DEL"," Categoria(s) apagada(s)");
DEFINE("_ADMIN_CATEGORIES_NAME_EMPTY","ERRO: Preencha o nome da categoria, por favor!");
DEFINE("_ADMIN_CATEGORIES_IMAGE","Imagem da categoria:");
DEFINE("_ADMIN_CATEGORIES_IMAGEPREV","Previsualiza��o:");
DEFINE("_ADMIN_CATEGORIES_SAVE","Categoria guardada");
DEFINE("_EVENTLIST_CATVIEW1","Mostrar eventos");
DEFINE("_EVENTLIST_CATVIEWCOUNTEV","Eventos:");
DEFINE("_ADMIN_EVENTS_SUC_PUBL_CAT"," Categoria(s) Publicada(s) com sucesso");
DEFINE("_ADMIN_EVENTS_SUC_UNPUBL_CAT"," Categoria(s) retirada(s) de Publica��o com sucesso");
DEFINE("_ADMIN_CATEGORIES_HEAD","Ctegorias Eventlist");

//Registration
DEFINE("_ADMIN_EVENTS_REGCOUNT","Utilizadores Inscritos");
DEFINE("_ADMIN_EVENTS_USERNAME","Nome de Utilizador");
DEFINE("_ADMIN_EVENTS_USERIP","IP");
DEFINE("_ADMIN_EVENTS_UREGDATE","Data de Reg.");
DEFINE("_ADMIN_EVENTS_USERID","ID Utilizador");
DEFINE("_ADMIN_EVENTS_USERDELETE","Apagar");
DEFINE("_ADMIN_REGISTER_DEL"," Utilizador(es) Inscrito(s) apagado(s)");
DEFINE("_ADMIN_EVENTS_UNREGISTRA","Permitir aos utilizadores anular a sua inscri��o?");
DEFINE("_EVENTS_REGISTRA_HEAD","Utilizadores Inscritos:");
DEFINE("_EVENTS_REGISTRA_ALLRE","J� est� incrito para este Evento.");		//changed in 0.8.3
DEFINE("_EVENTS_REGISTRA_LOGIN","Ter� que se autenticar para se inscrever neste Evento.");	//changed in 0.8.3
DEFINE("_EVENTS_REGISTRA_TOLATE","J� � demasiado tarde para se inscrever neste evento.");	//changed in 0.8.3
DEFINE("_EVENTS_REGISTRA_REG","Vou estar presente neste Evento:");
DEFINE("_EVENTS_REGISTRA_BUTTON","Increver");
DEFINE("_EVENTS_REGISTRA_SUCCESS","Foi inscrito neste evento com sucesso.");	//changed in 0.8.3
DEFINE("_EVENTS_REGISTRA_UNREG","Anular inscri��o neste evento:");
DEFINE("_EVENTS_REGISTRA_BUTTON_UNREG","Anular Inscri��o");
DEFINE("_EVENTS_REGISTER_DEL","J� n�o est� inscrito neste evento");		//changed in 0.8.3

//new 0.8
DEFINE("_ADMIN_CATEGORIES_ACCESS","Acesso");
DEFINE("_ADMIN_EVENTS_ACCESS_DENIED","Accesso negado.");
DEFINE("_ADMIN_EVENTS_SETT_REG_OPTION1","N�o");
DEFINE("_ADMIN_EVENTS_SETT_REG_OPTION2","Sim");

//new 0.8.6
DEFINE("_ADMIN_GDVERSION_TWO","GD vers�o � 2. cria��o de imagens miniaturas ativo.");
DEFINE("_ADMIN_GDVERSION_ONE","GD vers�o 1. Cria��o de imagens miniaturas est� disligado.");

//new 0.8.7 (THX Horus_68)
DEFINE("_ADMIN_CHOOSE_CITY","Escolha uma localidade");
DEFINE("_ADMIN_CHOOSE_A_VENUE","Escolha um evento em");
DEFINE("_ADMIN_CHOOSE_A_CITY","Por favor, escolha uma localidade da lista");

//new 0.8.9 (THX Kapone_pt)
DEFINE("_ADMIN_EVENTS_ENDDATE","Data do Evento (fim):");
DEFINE("_ADMIN_EVENTS_INFOBUTTON_ERROR_MSG", "Escolheu o link para o botao de informa��o, mas n�o colocou a largura para o mesmo. Por favor n�o coloque o link para o botao de infoma��o  ( na Tab de Configura��es Basicas) ou coloque a largura para o botao de informa��o (na Tab Layout)");
DEFINE("_ADMIN_EVENTS_SETT_SHOWFILTER","Mostrar filtro:");
DEFINE("_ADMIN_EVENTS_SETT_SHOWFILTER_DESC","Mostrar o campo do filtro na p�gina.");
?>
<?php
/**
* @version 0.8.9 $Id: portuguese.php 217 2007-06-18 14:49:07Z schlu $
* @package Eventlist
* @copyright (C) 2005 - 2007 Christoph Lukes
* @license http://www.gnu.org/copyleft/gpl.html GNU/GPL
* @Formal European Portuguese translation by Peter Romуo
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
DEFINE("_EVENTS_DESC","Descriчуo do evento:");
DEFINE("_EVENTS_LOCAT","Localizaчуo");
DEFINE("_EVENTS_LOCDESC","Descriчуo da localizaчуo:");
DEFINE("_EVENTS_DESCALERT","Desculpe, nehuma descriчуo disponэvel");
DEFINE("_EVENTS_COUNTRY_LO","Paэs:");
DEFINE("_ADMIN_EVENTS_DETA_REDI","Acesso nуo autorizado");
DEFINE("_EVENTS_HOMEPAGE_LO","Pсgina Internet:");
DEFINE("_EVENTS_HOMEPAGENO_LO","Nenhuma Pсgina Internet disponэvel");
DEFINE("_EVENTLIST_SHARCHIVE","Mostrar Arquivo");
DEFINE("_EVENTS_MAP","Mostrar mapa de Localizaчуo");

//images
DEFINE("_EVENTS_IMAGEEMPT","Seleccione uma imagem para transferir ,por favor");
DEFINE("_EVENTS_IMAGESIZEBIG","Tamanho do ficheiro estс errado");
DEFINE("_EVENTS_IMAGECHARACT","O nome do ficheiro sѓ pode conter caracteres alfanumщricos e nenhum espaчo em branco.");
DEFINE("_EVENTS_IMAGEEXIST","A imagem jс existe. Escolha outro nome, por favor.");
DEFINE("_EVENTS_IMAGETYPE","O ficheiro deverс ser do tipo gif, png, jpg, bmp");  //changed in 0.8.3
DEFINE("_EVENTS_IMAGEFAIL","Transferъncia falhou");
DEFINE("_ADMIN_EVENTS_CHOOIMAGE","Escolha a imagem:");
DEFINE("_ADMIN_EVENTS_IMAGEUPL","Escolha a imagem para transferir:");
DEFINE("_EVENTS_IMAGEUPLSUCCESS","Transferъncia bem sucedida");
DEFINE("_EVENTS_IMAGEUPLNOGD","GD-Library nуo disponэvel! Desactive a criaчуo de imagens miniatura, por favor.");
DEFINE("_EVENTS_IMAGEUPLPNG","Suporte PNG disponэvel");
DEFINE("_EVENTS_IMAGEUPLNOPNG","Suporte PNG INdisponэvel");
DEFINE("_EVENTS_IMAGEUPLJPG","Suporte JPG disponэvel");
DEFINE("_EVENTS_IMAGEUPLNOJPG","Suporte JPG INdisponэvel");
DEFINE("_EVENTS_IMAGEUPLGIF","Suporte GIF disponэvel");
DEFINE("_EVENTS_IMAGEUPLNOGIF","Suporte GIF INdisponэvel");
DEFINE("_ADMIN_EVENTS_IMAGETARGET","Pasta de destino:");
DEFINE("_ADMIN_EVENTS_IMAGEGDVERS","Versуo GD:");
DEFINE("_ADMIN_EVENTS_IMAGEGDVERSWARN","Nota: O Eventlist requer a versуo 2 ou posterior do GD-Library para a criaчуo de miniaturas. Se nуo tiver suporte GD ou ainda esteja a utilizar a versуo 1 desactive a criaчуo de miniaturas.");

//Backend

//add/edit event
DEFINE("_ADMIN_EVENTS_HEADER_EV","Evento Eventlist");
DEFINE("_ADMIN_EVENTS_DATE","Data do evento:");
DEFINE("_ADMIN_EVENTS_DATE_NOTICE","Formato aaaa-mm-dd !");
DEFINE("_ADMIN_EVENTS_TIME_NOTICE","Formato: hh:mm!");
DEFINE("_ADMIN_EVENTS_CLUB_ID","Local:");
DEFINE("_ADMIN_EVENTS_DEL"," Evento(s) apagado(s)");
DEFINE("_ADMIN_EVENTS_DELFORM","ERRO: Data nуo estс no formato adequado");
DEFINE("_ADMIN_EVENTS_DELFORMT","ERRO: Hora tem o formato errado ou entуo activou a visualizaчуo de hora no espaчo pњblico. Neste caso deverс preencher este campo");
DEFINE("_ADMIN_EVENTS_EMPTY","ERRO: primeiro adicione a local");
DEFINE("_ADMIN_EVENTS_SAVE","Evento guardado.");
DEFINE("_ADMIN_EVENTS_DESCR","Descriчуo do evento:");
DEFINE("_ADMIN_EVENTS_DESCR_OPT","opcional");
DEFINE("_ADMIN_EVENTS_DESCR_INTRO","A descriчуo do evento");
DEFINE("_ADMIN_EVENTS_TIME","Hora:");
DEFINE("_ADMIN_EVENTS_TITEL","Tэtulo do evento:");
DEFINE("_ADMIN_EVENTS_NO_LOC","ERRO: seleccione local ou adicione aqui um local primeiro. Posteriormente poderс adicionar eventos");	//changed in 0.8.3
DEFINE("_ADMIN_EVENTS_ENDTIME","Hora do Fim:");
DEFINE("_ADMIN_EVENTS_ENDTIME_NOTICE","Formato: hh:mm! (opcional)");
DEFINE("_ADMIN_EVENTS_PUBLI","Publicado?");
DEFINE("_ADMIN_EVENTS_CAT_ID","Categoria:");
DEFINE("_ADMIN_EVENTS_SEL_CAT","Seleccione categoria");
DEFINE("_ADMIN_EVENTS_SEL_LOC","Seleccione local");
DEFINE("_ADMIN_EVENTS_CATEMPTY","ERROR: Seleccione a categoria ou adicione uma categoria primeiro. Posteriormente poderс adicionar eventos"); //changed in 0.8.3
DEFINE("_ADMIN_EVENTS_SUC_ARCH"," Evento(s) arquivado(s) com sucesso");
DEFINE("_ADMIN_EVENTS_SUC_PUBL"," Evento(s) publicado(s) com sucesso");
DEFINE("_ADMIN_EVENTS_SUC_UNARCH"," Evento(s) retirado(s) do arquivo com sucesso");
DEFINE("_ADMIN_EVENTS_SUC_UNPUBL"," Evento(s) retirado(s) de publicaчуo com sucesso");
DEFINE("_ADMIN_EVENTS_OTHER","Outros");
DEFINE("_ADMIN_EVENTS_REGISTRA","Active registos:");

//add/edit location
DEFINE("_ADMIN_EVENTS_HEADER_LO","Localizaчуo Eventlist");
DEFINE("_ADMIN_EVENTS_CLUB_LO","Local:");
DEFINE("_ADMIN_EVENTS_CLUBHOME_LO","Pсgina Internet do Local:");
DEFINE("_ADMIN_EVENTS_CLUBHOME_NOTICE_LO","URL deverс estar no formato http://www.google.pt!");		//changed in 0.8.3
DEFINE("_ADMIN_EVENTS_CITY_LO","Cidade:");
DEFINE("_ADMIN_EVENTS_DEL_LO", "ERRO: existe no mэnimo um evento neste local");
DEFINE("_ADMIN_EVENTS_DELYES_LO", " Localizaчуo(ѕes) apagada(s)");
DEFINE("_ADMIN_EVENTS_SAVECLUB_LO","ERRO: adicione Local");
DEFINE("_ADMIN_EVENTS_SAVEHOMEP_LO","ERROR: adicione pсgina internet");
DEFINE("_ADMIN_EVENTS_SAVETOWN_LO","ERROR: adicione cidade");
DEFINE("_ADMIN_EVENTS_SAVE_LO","Local guardado");
DEFINE("_ADMIN_EVENTS_DESCR_LO","Descriчуo do local");
DEFINE("_ADMIN_EVENTS_DESCR_OPT_LO","opcional");
DEFINE("_ADMIN_EVENTS_DESCR_INTRO_LO","A Descriчуo do local");
DEFINE("_ADMIN_EVENTS_CLUBSTREET_LO","Rua:");
DEFINE("_ADMIN_EVENTS_CLUBPLZ_LO","Cѓd. Postal:");
DEFINE("_ADMIN_EVENTS_CLUBCOUNTRY_LO","Paэs (PT,US,UK,DE,CH, etc.):");		//changed in 0.8.3
DEFINE("_ADMIN_EVENTS_SAVEADRESS_LO","ERRO: Activou uma das seguintes opчѕes: mostrar hiperligaчуo para map24, mostrar endereчo. Desactive estas opчѕes se nуo quiser preencher estes campos de endereчo");		//changed in 0.8.3
DEFINE("_ADMIN_EVENTS_OPTIONAL_LO","* sуo campos facultativos. Nota: Os campos de endereчo sѓ sуo facultativos caso tenha desactivado a funcionalidade de map24!");
DEFINE("_ADMIN_EVENTS_SUC_PUBL_LO"," Local(ais) publicado(s) com sucesso");
DEFINE("_ADMIN_EVENTS_SUC_UNPUBL_LO"," Local(ais) retirados de publicaчуo com sucesso");
DEFINE("_ADMIN_EVENTS_ADRESSDET","Detalhes do endereчo");
//list events
DEFINE("_ADMIN_EVENTS_DATE_LI_EV","Data");
DEFINE("_ADMIN_EVENTS_CLUB_LI_EV","Local");
DEFINE("_ADMIN_EVENTS_CLUBHOME_LI_EV","URL Evento");
DEFINE("_ADMIN_EVENTS_CITY_LI_EV","Cidade");
DEFINE("_ADMIN_EVENTS_LIMITBOX_LI_EV","Mostrar: ");
DEFINE("_ADMIN_EVENTS_TITEL_LI_EV","Tэtulo do Evento");
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
DEFINE("_ADMIN_EVENTS_DELIVMAIL","O seu endereчo e-mail:");
DEFINE("_ADMIN_EVENTS_DELIVMAIL_DESC","Adicione o seu endereчo de e-mail aqui, por favor");
DEFINE("_EVENTS_DELIVER","Entregue o Evento");
DEFINE("_EVENTS_VALIDATE","ERRO: Preencha todos os campos, por favor");
DEFINE("_ADMIN_EVENTS_DELIV_REDI","A entrega de eventos nуo estс permitida");		//changed in 0.8.3
DEFINE("_EVENTS_DELIVMAILBOD_1"," Recebeu um pedido do utilizador ");
DEFINE("_EVENTS_DELIVMAILBOD_2"," Endereчo e-mail utilizador: ");
DEFINE("_EVENTS_DELIVMAILBOD_3"," IP - Utilizador: ");
DEFINE("_EVENTS_DELIVMAILBOD_4"," Hora pedido: ");
DEFINE("_EVENTS_DELIVMAILBOD_5"," Tэtulo do evento: ");
DEFINE("_EVENTS_DELIVMAILBOD_6"," Data do evento: ");
DEFINE("_EVENTS_DELIVMAILBOD_7"," hora do evento: ");
DEFINE("_EVENTS_DELIVMAILBOD_8"," Local: ");
DEFINE("_EVENTS_DELIVMAILBOD_9"," Descriчуodo evento: ");
DEFINE("_EVENTS_DELIVMAILBOD_10"," : Novo evento ");
DEFINE("_EVENTLIST_DELIVER","Submeta novo evento");
DEFINE("_EVENTLIST_BACK","voltar");
DEFINE("_ADMIN_EVENTS_DELMAILFORM","ERRO: E-mail tem formato errado!");
DEFINE("_ADMIN_EVENTS_DELTITLLEN","ERRO: Tэtulo demasiado longo!");
DEFINE("_ADMIN_EVENTS_DELNAMLEN","ERRO: Nome demasiado longo!");
DEFINE("_EVENTS_DELTEXTARHTML","HTML nуo щ permitido!");
DEFINE("_EVENTS_RESTZ","disponэvel");
DEFINE("_EVENTS_RESTZAKT","refrescar");
DEFINE("_EVENTS_DEL_DATE_EMPT","Adicione data, por favor!");
DEFINE("_EVENTS_DEL_TIME_EMPT","Adicione hora, por favor!");
DEFINE("_EVENTS_DEL_TITEL_EMPT","Adicione tэtulo, por favor!");
DEFINE("_EVENTS_DEL_CATEG_EMPT","Escolha uma categoria, por favor!");
DEFINE("_EVENTS_DEL_LOCAT_EMPT","Escolha um local, por favor!");
DEFINE("_EVENTS_DEL_TIME_FORM","ERRO: Hora tem o formato errado");

//Frontend deliver location
DEFINE("_EVENTLIST_DELIVER_LOC","Submeta novo local");
DEFINE("_EVENTS_DELIVMAILLOCBOD_1"," Recebeu um pedido do utilizador ");		//changed in 0.8.3
DEFINE("_EVENTS_DELIVMAILLOCBOD_2"," Endereчo e-mail utilizador: ");
DEFINE("_EVENTS_DELIVMAILLOCBOD_3"," IP - Utilizador: ");
DEFINE("_EVENTS_DELIVMAILLOCBOD_4"," Hora pedido: ");
DEFINE("_EVENTS_DELIVMAILLOCBOD_5"," Local: ");
DEFINE("_EVENTS_DELIVMAILLOCBOD_6"," URL Local: ");
DEFINE("_EVENTS_DELIVMAILLOCBOD_7"," Rua: ");
DEFINE("_EVENTS_DELIVMAILLOCBOD_8"," Cѓd. Postal: ");
DEFINE("_EVENTS_DELIVMAILLOCBOD_9"," Cidade: ");
DEFINE("_EVENTS_DELIVMAILLOCBOD_10"," Cѓd. Paэs: ");
DEFINE("_EVENTS_DELIVMAILLOCBOD_11"," Descriчуo: ");
DEFINE("_EVENTS_DELIVMAILLOCBOD_12"," : Novo local ");
DEFINE("_EVENTS_DELIVER_LOC","Submeter local");
DEFINE("_EVENTS_DELURLLOCFORM","URL demsiado longo");
DEFINE("_EVENTS_DELSTREETLOCFORM","Rua demasiado longo");
DEFINE("_EVENTS_DELPLZLOCFORM","Cѓd. Postal demasiado longo");
DEFINE("_EVENTS_DELCITYLOCFORM","Cidade demsiado longo");
DEFINE("_EVENTS_DELCOUNTRYLOCFORM","Cѓd. Paэs demsiado longo");
DEFINE("_EVENTS_DELURLLOCFORM2","ERROR: URL tem o formato errado!");
DEFINE("_EVENTS_DEL_LOC_STREET_EMPT","ERRO: Preencha a Rua, por favor!");
DEFINE("_EVENTS_DEL_LOC_PLZ_EMPT","ERRO: Preencha o Cѓd. Postal, por favor!");
DEFINE("_EVENTS_DEL_LOC_COUNTRY_EMPT","ERRO: Preencha o Cѓd. de Paэs, por favor!");

//settings
DEFINE("_ADMIN_EVENTS_SETT_HEADER","Opчѕes Eventlist");
DEFINE("_ADMIN_EVENTS_SETT_SAVE","Opчѕes guardadas com sucesso");
DEFINE("_ADMIN_EVENTS_SETT_DELOLD","Manusear eventos antigos:");
DEFINE("_ADMIN_EVENTS_SETT_DELOLD1","Nуo fazer nada");
DEFINE("_ADMIN_EVENTS_SETT_DELOLD2","Apagar eventos antigos");
DEFINE("_ADMIN_EVENTS_SETT_DELOLD3","Arquivar eventos antigos");
DEFINE("_ADMIN_EVENTS_SETT_DELOLD_DESC","Apagar ou arquivar eventos antigos automaticamente.");
DEFINE("_ADMIN_EVENTS_SETT_DELOLDNR","Nњmero de dias:");
DEFINE("_ADMIN_EVENTS_SETT_DELOLDNR_DESC","Nњmero de dias no passado que nуo serуo apagados ou arquivados. Isto nуo tem efeito nenhum se a opчуo anterior estiver desactivada.");
DEFINE("_ADMIN_EVENTS_SETT_EVNR","Nњmero de Eventos na Pсgina Inicial:");
DEFINE("_ADMIN_EVENTS_SETT_EVNR_DESC","Nњmero de eventos a mostrar na pсgina inicial.");
DEFINE("_ADMIN_EVENTS_SETT_MAPID","O seu identificador Map24:");
DEFINE("_ADMIN_EVENTS_SETT_MAPID_DESC","Deverс registar-se no Map24 para obter um identificador.");
DEFINE("_ADMIN_EVENTS_SETT_SHOWTIME","Mostrar hora:");
DEFINE("_ADMIN_EVENTS_SETT_SHOWTIME_DESC","Mostrar hora na pсgina inicial.");
DEFINE("_ADMIN_EVENTS_SETT_SHOWTITEL","Mostrar tэtulo:");
DEFINE("_ADMIN_EVENTS_SETT_SHOWTITEL_DESC","Mostrar o tэtulo do evento na pсgina inicial.");
DEFINE("_ADMIN_EVENTS_SETT_SHOWLOC","Mostrar Local/Localizaчуo:");
DEFINE("_ADMIN_EVENTS_SETT_SHOWLOC_DESC","Mostrar Local/Localizaчуo na pсgina inicial.");
DEFINE("_ADMIN_EVENTS_SETT_SHOWCITY","Mostrar cidade:");
DEFINE("_ADMIN_EVENTS_SETT_SHOWCITY_DESC","Mostrar cidade na pсgina inicial.");
DEFINE("_ADMIN_EVENTS_SETT_SHOWLINKMAP","Mostrar hiperligaчуo para o mapa:");
DEFINE("_ADMIN_EVENTS_SETT_SHOWLINKMAP_DESC","Mostrar hiperligaчуo para o mapa na pсgina de detalhes. Nota: Necessita introduzir o seu identificador map24 se escolher este serviчo.");
DEFINE("_ADMIN_EVENTS_SETT_SHOWHEADER","Mostrar cabeчalho:");
DEFINE("_ADMIN_EVENTS_SETT_SHOWHEADER_DESC","Mostrar cabeчalho na pсgina inicial.");
DEFINE("_ADMIN_EVENTS_SETT_SHOWINTRO","Mostrar texto de introduчуo:");
DEFINE("_ADMIN_EVENTS_SETT_SHOWINTRO_DESC","Mostrar o texto de introduчуo na pсgina inicial.");
DEFINE("_ADMIN_EVENTS_SETT_INTROT","Texto de Introduчуo para a Lista de Eventos:");
DEFINE("_ADMIN_EVENTS_SETT_INTROT_DESC","Este texto serс apresentado acima das listagens na pсgina principal.");
DEFINE("_ADMIN_EVENTS_SETT_TABLW","Largura da tabela em % :");
DEFINE("_ADMIN_EVENTS_SETT_TABLW_DESC","Largura da listagem na pсgina inicial.");
DEFINE("_ADMIN_EVENTS_SETT_DATEC","Largura da Coluna de Data em %:");
DEFINE("_ADMIN_EVENTS_SETT_DATEC_DESC","Largura da Coluna de Data.");
DEFINE("_ADMIN_EVENTS_SETT_CNAME","Nome por medida:");
DEFINE("_ADMIN_EVENTS_SETT_CNAME_DESC","Mude isto para o que quiser.");
DEFINE("_ADMIN_EVENTS_SETT_TITELW","Largura da coluna de tэtulo em %:");
DEFINE("_ADMIN_EVENTS_SETT_TITELW_DESC","Largura da coluna de tэtulo (deixe em branco se o tiver desactivado)");
DEFINE("_ADMIN_EVENTS_SETT_INFOB","Largura da coluna do botуo de informaчуo em %:");
DEFINE("_ADMIN_EVENTS_SETT_INFOB_DESC","Largura da coluna do botуo de informaчуo");
DEFINE("_ADMIN_EVENTS_SETT_LOCA","Largura da coluna do local em %:");
DEFINE("_ADMIN_EVENTS_SETT_LOCA_DESC","Largura da coluna do local (deixe em branco se o tiver desactivado)");
DEFINE("_ADMIN_EVENTS_SETT_CITYW","Largura da coluna da cidade em %:");
DEFINE("_ADMIN_EVENTS_SETT_CITYW_DESC","Largura da coluna da cidade (deixe em branco se o tiver desactivado)");
DEFINE("_ADMIN_EVENTS_SETT_UNWR","Escrita do ficheiro de configuraчуo nуo permitida!");
DEFINE("_ADMIN_EVENTS_SETT_FORDATE","Formato da data:");
DEFINE("_ADMIN_EVENTS_SETT_FORDATE_DESC","Formato da data utilizando a syntaxe do strftime em PHP, por exemplo: %d.%m.%Y. Mais informaчуo: ");
DEFINE("_ADMIN_EVENTS_SETT_FORTIME","Formato hora:");
DEFINE("_ADMIN_EVENTS_SETT_FORTIME_DESC","Formato da hora utilizando a syntaxe do strftime em PHP, por exemplo:%H.%M. Mais informaчуo: ");
DEFINE("_ADMIN_EVENTS_SETT_FORTIMENAME","Nome:");
DEFINE("_ADMIN_EVENTS_SETT_FORTIMENAME_DESC","Preencha &quot;h&quot; or &quot;Hora&quot; por exemplo. Isto serс apresentado antes da hora no espaчo pњblico. Deixe em branco caso nуo precise.");		//changed in 0.8.3
DEFINE("_ADMIN_EVENTS_SETT_SHOWDETAILS","Mostrar hiperligaчуo para a pсgina de detalhe:");
DEFINE("_ADMIN_EVENTS_SETT_SHOWDETAILS_DESC","Mostrar hiperligaчуo para a pсgina de detalhes e onde? (Hiperligaчуo no tэtulo sѓ funcionarс se a mostrar tэtulo tenha sido atribuэdo sim, эcones sѓ aparecerуo caso tenha definido a largura nos atributos de apresentaчуo)");		//changed in 0.8.3
DEFINE("_ADMIN_EVENTS_SETT_SHOWTIMEDET_DESC","Mostrar hora na pсgina de detalhes.");
DEFINE("_ADMIN_EVENTS_SETT_SHOWDETEVDESC","Mostrar descriчуo do evento:");
DEFINE("_ADMIN_EVENTS_SETT_SHOWDETEVDESC_DESC","Mostrar descriчуo do evento na pсgina de detalhes.");
DEFINE("_ADMIN_EVENTS_SETT_SHOWDETEVTITEL","Mostrar tэtulo do evento:");
DEFINE("_ADMIN_EVENTS_SETT_SHOWDETEVTITEL_DESC","Mostrar tэtulo do evento na pсgina de detalhes.");
DEFINE("_ADMIN_EVENTS_SETT_SHOWDETEVADRESS","Mostrar endereчo do local:");
DEFINE("_ADMIN_EVENTS_SETT_SHOWDETEVADRESS_DESC","Mostrar endereчo do local na pсgina de detalhes.");
DEFINE("_ADMIN_EVENTS_SETT_SHOWDETLOCDESC","Mostrar descriчуo do evento:");
DEFINE("_ADMIN_EVENTS_SETT_SHOWDETLOCDESC_DESC","Mostrar descriчуo do evento na pсgina de detalhes.");
DEFINE("_ADMIN_EVENTS_SETT_SHOWLINKCLUB","Mostrar hiperligaчуo para vъr localizaчуo:");
DEFINE("_ADMIN_EVENTS_SETT_SHOWLINKCLUB_DESC","Mostrar hiperligaчуo para vъr localizaчуo na pсgina de detalhes.");
DEFINE("_ADMIN_EVENTS_SETT_SHOWDETLINKCLUB","Mostrar hiperligaчуo para a localizaчуo:");
DEFINE("_ADMIN_EVENTS_SETT_SHOWDETLINKCLUB_DESC","Mostrar hiperligaчуo para a localizaчуo na pсgina de detalhes.");
DEFINE("_ADMIN_EVENTS_SETT_NEWDEL","Eventos Novos de utilizadores:");
DEFINE("_ADMIN_EVENTS_SETT_NEWDEL_DESC","Permite aos utilizadores submeter novos eventos no espaчo pњblico e determinar o posto do utilizador.");
DEFINE("_ADMIN_EVENTS_SETT_NEWDELMAIL","E-mail aquando de uma nova submissуo de utilizador:");
DEFINE("_ADMIN_EVENTS_SETT_NEWDELMAIL_DESC","Informa o admin via e-mail sobre novos eventos submetidos pelos utilizadores?");
DEFINE("_ADMIN_EVENTS_SETT_NEWDELMAIL1","destinatсrio de e-mail:");
DEFINE("_ADMIN_EVENTS_SETT_NEWDELMAIL1_DESC","O endereчo de e-mail da pessoa que deve receber a informaчуo por e-mail.");
DEFINE("_ADMIN_EVENTS_SETT_NEWDELMAIL2","CC: destinatсrio de cѓpia de e-mail:");
DEFINE("_ADMIN_EVENTS_SETT_NEWDELMAIL2_DESC","O endereчo de e-mail da segunda pessoa que deve receber a informaчуo por e-mail (opcional).");
DEFINE("_ADMIN_EVENTS_SETT_DATDESCLIMIT","Comprimento Mсx. do evento e da descriчуo de evento.");
DEFINE("_ADMIN_EVENTS_SETT_DATDESCLIMIT_DESC","Comprimento Mсx. do evento e da descriчуo de evento. Se o comprimento da descriчуo fєr demasido longo, a descriчуo serс truncada e a nota [truncado] serс adicionada.");		//changed in 0.8.3
DEFINE("_ADMIN_EVENTS_SETT_SHOWDET1","Detalhes desligados");
DEFINE("_ADMIN_EVENTS_SETT_SHOWDET2","Hiperligaчуo no tэtulo");
DEFINE("_ADMIN_EVENTS_SETT_SHOWDET3","Hiperligaчуo no эcone");
DEFINE("_ADMIN_EVENTS_SETT_SHOWDET4","Ambos");
DEFINE("_ADMIN_EVENTS_SETT_AUTOPUB","Autopublicaчуo?");
DEFINE("_ADMIN_EVENTS_SETT_AUTOPUB_DESC","Publicar Eventos atomaticamente??");
DEFINE("_ADMIN_EVENTS_SETT_NEWDELLOC","Locais novos pelos utilizadores:");
DEFINE("_ADMIN_EVENTS_SETT_NEWDELLOC_DESC","Permite aos utilizadores submeter novos locais a partir do espaчo pњblico e determinar o posto de utilizador.");
DEFINE("_ADMIN_EVENTS_SETT_AUTOPUBLOCS_DESC","Publicar Locais automaticamente?");
DEFINE("_ADMIN_EVENTS_SETT_MAILINF1","Desligado");
DEFINE("_ADMIN_EVENTS_SETT_MAILINF2","Sѓ novos eventos");
DEFINE("_ADMIN_EVENTS_SETT_MAILINF3","Sѓ novos locais");
DEFINE("_ADMIN_EVENTS_SETT_MAILINF4","Ambos");
DEFINE("_ADMIN_EVENTS_SETT_SHOWCAT","Mostrar categoria:");
DEFINE("_ADMIN_EVENTS_SETT_SHOWCAT_DESC","Mostrar categria na pсgina inicial.");
DEFINE("_ADMIN_EVENTS_SETT_CATW","Largura da coluna da categoria em %:");
DEFINE("_ADMIN_EVENTS_SETT_CATW_DESC","Largura da coluna da categoria (deixe em branco se a tiver desactivado)");
DEFINE("_ADMIN_EVENTS_SETT_VIEW","Escolha a apresentaчуo por omissуo na pсgina inicial:");
DEFINE("_ADMIN_EVENTS_SETT_VIEW1","Ver Listagem Simples");
DEFINE("_ADMIN_EVENTS_SETT_VIEW2","Listagem Simples por Categorias");
DEFINE("_ADMIN_EVENTS_SETT_VIEW3","Listagem Detalhada por Categorias");
DEFINE("_ADMIN_EVENTS_SETT_VIEW4","Marcador de Posiчуo2");		//changed in 0.8.3
DEFINE("_ADMIN_EVENTS_SETT_VIEW_DESC","Escolha aqui a apresentaчуo por omissуo na pсgina inicial. 'Ver Listagem Simples' щ equivalente р apresentaчуo antiga.");
DEFINE("_ADMIN_EVENTS_SETT_NEWDELREC_DESC","Permitir acesso aos grupos filhos tambщm? Caso escolha nуo, o acesso щ restrito ao grupo seleccionado. Nota: Administradores tъm sempre acesso.");
DEFINE("_ADMIN_EVENTS_SETT_NEWDELREC","Recursivo:");
DEFINE("_ADMIN_EVENTS_SETT_IMAGESIZE","Tamanho Mсx. de ficheiro de imagem:");
DEFINE("_ADMIN_EVENTS_SETT_IMAGESIZE_DESC","Tamanho Mсx. de ficheiro de imagem em kb");
DEFINE("_ADMIN_EVENTS_SETT_IMAGEHIGHT","Altura Mсx. da imagem miniatura:");
DEFINE("_ADMIN_EVENTS_SETT_IMAGEHIGHT_DESC","Altura Mсx. da imagem da miniatura e da category");
DEFINE("_ADMIN_EVENTS_SETT_IMAGEWIDTH","Largura Mсx. da imagem miniatura:");
DEFINE("_ADMIN_EVENTS_SETT_IMAGEWIDTH_DESC","Largura Mсx. da imagem da miniatura e da category");
DEFINE("_ADMIN_EVENTS_SETT_IMAGEPROB","Manter proporcionalidade:");
DEFINE("_ADMIN_EVENTS_SETT_IMAGEPROB_DESC","Manter proporчѕes ou alterar tamanho?");
DEFINE("_ADMIN_EVENTS_SETT_GDSTATUS","Estado: ");
DEFINE("_ADMIN_EVENTS_SETT_GDDISABLE","Activar imagens miniatura:");
DEFINE("_ADMIN_EVENTS_SETT_GDDISABLE_DESC","Desactive isto se o estado mostrar que a GD-Library nуo estс disponэvel ou caso sѓ tenha a versуo 1.");
DEFINE("_ADMIN_EVENTS_SETT_IMAGEENAB","Transferъncia de imagens:");
DEFINE("_ADMIN_EVENTS_SETT_IMAGEENAB1","Activada");
DEFINE("_ADMIN_EVENTS_SETT_IMAGEENAB2","Opcional");
DEFINE("_ADMIN_EVENTS_SETT_IMAGEENAB3","Obrigatѓria");
DEFINE("_ADMIN_EVENTS_SETT_IMAGEENAB_DESC","A transferъncia de imagens estс desactivada ou щ opcional ou щ obrigatѓria por parte dos utilizadores");
DEFINE("_ADMIN_EVENTS_SETT_IMAGECHMOD","Chmod para imagens:");
DEFINE("_ADMIN_EVENTS_SETT_IMAGECHMOD_DESC","Introduza aqui as permissѕes que deseja dar рs imagens. Exemplo 0740");	//changed in 0.8.3
DEFINE("_ADMIN_EVENTS_SETT_HEAD1","Manuseamento de eventos");
DEFINE("_ADMIN_EVENTS_SETT_HEAD2","Visualizaчуo - Opчѕes");
DEFINE("_ADMIN_EVENTS_SETT_HEAD3","Intro");
DEFINE("_ADMIN_EVENTS_SETT_HEAD4","AC - Eventos");
DEFINE("_ADMIN_EVENTS_SETT_HEAD5","AC - Locais");
DEFINE("_ADMIN_EVENTS_SETT_HEAD6","Locais");
DEFINE("_ADMIN_EVENTS_SETT_HEAD7","Descriчуo - Comprimento");
DEFINE("_ADMIN_EVENTS_SETT_HEAD8","Manuseamento E-mail");
DEFINE("_ADMIN_EVENTS_SETT_HEAD9","Mnuseamento Imagens");
DEFINE("_ADMIN_EVENTS_SETT_HEAD10","Espaчo Pњblico");
DEFINE("_ADMIN_EVENTS_SETT_HEAD11","Eventos");
DEFINE("_ADMIN_EVENTS_SETT_HEAD12","Opчѕes Gerais de Apresentaчуo");	//changed in 0.8.3
DEFINE("_ADMIN_EVENTS_SETT_HEAD13","Largura da tabela");
DEFINE("_ADMIN_EVENTS_SETT_HEAD14","Coluna Data");
DEFINE("_ADMIN_EVENTS_SETT_HEAD15","Coluna Tэtulo");
DEFINE("_ADMIN_EVENTS_SETT_HEAD16","Coluna Info");
DEFINE("_ADMIN_EVENTS_SETT_HEAD17","Coluna Local");
DEFINE("_ADMIN_EVENTS_SETT_HEAD18","Coluna Cidade");
DEFINE("_ADMIN_EVENTS_SETT_HEAD19","Coluna Categoria");
DEFINE("_ADMIN_EVENTS_SETT_HEADREG1","Integraчуo");
DEFINE("_ADMIN_EVENTS_SETT_COMM_SOL","Escolha a Soluчуo de Comunidade:");
DEFINE("_ADMIN_EVENTS_SETT_COMM_SOL1","Nуo utilizar nenhma");
DEFINE("_ADMIN_EVENTS_SETT_COMM_SOL2","CB / CBE");	//changed in 0.8.3
DEFINE("_ADMIN_EVENTS_SETT_COMM_SOL_DESC","Escolha a soluчуo de construчуo de comunidade que utiliza. Community builder de Joomlapolis ou o Community Builder Enhanced de www.kolloczek.com");	//changed in 0.8.3
DEFINE("_ADMIN_EVENTS_SETT_HEADREG2","Opчѕes Soluчуo Comunidade");
DEFINE("_ADMIN_EVENTS_SETT_COMM_OPTION","Escolha opчѕes de integraчуo:");
DEFINE("_ADMIN_EVENTS_SETT_COMM_OPTION1","Sem integraчуo");
DEFINE("_ADMIN_EVENTS_SETT_COMM_OPTION2","Hiperligaчуo para perfil");
DEFINE("_ADMIN_EVENTS_SETT_COMM_OPTION3","Hiperligaчуo para perfil e apresentaчуo de avatar");
DEFINE("_ADMIN_EVENTS_SETT_COMM_OPTION_DESC","Escolha o tipo de integraчуo. Eventlist suporta a apresentaчуo do Avatar e a geraчуo de hiperligaчѕes para o perfil do utilizador que se tenha registado num Evento");
DEFINE("_ADMIN_EVENTS_SETT_HEADREG3","Atenчуo");
DEFINE("_ADMIN_EVENTS_SETT_COMM_NOTES","Eventlist suporta o componente AKReservation caso necessite registos mais detalhados. Para tanto, basta simplesmente adicionar o gatilho mambot no campo da descriчуo do evento listado. Hiperligaчуo: ");
DEFINE("_ADMIN_EVENTS_SETT_MAP_OPTION1","Nenhum serviчo de mapa");
DEFINE("_ADMIN_EVENTS_SETT_MAP_OPTION2","Map 24");
DEFINE("_ADMIN_EVENTS_SETT_MAP_OPTION3","Google Map");
DEFINE("_ADMIN_EVENTS_SETT_HIDELOC","Esconder Informaчуo do Local");
DEFINE("_ADMIN_EVENTS_SETT_HIDELOC_DESC","Esconder completamente os detalhes da localizaчуo. Todas as outras opчѕes para os detalhes deixarуo de surtir efeito.");
DEFINE("_ADMIN_EVENTS_SETT_WARNING","!! Verifica as opчѕes do teu mѓdulo! Active isto sѓ no caso de o ter desactivado no seu mѓdulo. Nуo o utilize duas vezes!!");	//changed in 0.8.3
DEFINE("_ADMIN_EVENTS_SETT_INFOBUT_WARNING","!! Apague a largura  se utilizar uma hiperligaчуo para a pсgina de detalhes mediante o tэtulo ou se nуo utilizar nenhuma hiperligaчуo !!");
DEFINE("_ADMIN_EVENTS_SETT_CATLINK","Mostrar hiperligaчуo para a vissualizaчуo por categorias:");
DEFINE("_ADMIN_EVENTS_SETT_CATLINK_DESC","Mostrar hiperligaчуo para a vissualizaчуo por categorias na pсgina inicial.");
DEFINE("_ADMIN_EVENTS_SETT_HEADREG4","Espaчo Pњblico:");
DEFINE("_ADMIN_EVENTS_SETT_COMM_FRO_RE","Permitir registos:");
DEFINE("_ADMIN_EVENTS_SETT_COMM_FRO_RE_DESC","Permitir aos utilizadores escolher se querem ou nуo permitir registos nos Eventos que submetem ou utilizar os atributos por omissуo");
DEFINE("_ADMIN_EVENTS_SETT_COMM_FRO_UNRE","Permitir anular registos:");
DEFINE("_ADMIN_EVENTS_SETT_COMM_FRO_UNRE_DESC","Permitir aos utilizadores escolher se querem ou nуo permitir a anulaчуo de registos nos Eventos que submetem ou utilizar os atributos por omissуo");

//Categories
DEFINE("_ADMIN_CATEGORIES_NAME","Nome");
DEFINE("_ADMIN_CATEGORIES_PUBLISH","Publicar?");
DEFINE("_ADMIN_CATEGORIES_ORDER","Reordenar");
DEFINE("_ADMIN_CATEGORIES_PUBLI","Publicar:");
DEFINE("_ADMIN_CATEGORIES_DESCR_OPT_LO","(opcional)");
DEFINE("_ADMIN_CATEGORIES_DESCR_INTRO_LO","A descriчуo da Categoria");
DEFINE("_ADMIN_CATEGORIES_DESCR_LO","Descriчуo da categoria:");
DEFINE("_ADMIN_EVENTS_DEL_CAT","ERRO: no mэn. existe um evento atribuэdo a esta categoria");
DEFINE("_ADMIN_CATEGORIES_DEL"," Categoria(s) apagada(s)");
DEFINE("_ADMIN_CATEGORIES_NAME_EMPTY","ERRO: Preencha o nome da categoria, por favor!");
DEFINE("_ADMIN_CATEGORIES_IMAGE","Imagem da categoria:");
DEFINE("_ADMIN_CATEGORIES_IMAGEPREV","Previsualizaчуo:");
DEFINE("_ADMIN_CATEGORIES_SAVE","Categoria guardada");
DEFINE("_EVENTLIST_CATVIEW1","Mostrar eventos");
DEFINE("_EVENTLIST_CATVIEWCOUNTEV","Eventos:");
DEFINE("_ADMIN_EVENTS_SUC_PUBL_CAT"," Categoria(s) Publicada(s) com sucesso");
DEFINE("_ADMIN_EVENTS_SUC_UNPUBL_CAT"," Categoria(s) retirada(s) de Publicaчуo com sucesso");
DEFINE("_ADMIN_CATEGORIES_HEAD","Ctegorias Eventlist");

//Registration
DEFINE("_ADMIN_EVENTS_REGCOUNT","Utilizadores Inscritos");
DEFINE("_ADMIN_EVENTS_USERNAME","Nome de Utilizador");
DEFINE("_ADMIN_EVENTS_USERIP","IP");
DEFINE("_ADMIN_EVENTS_UREGDATE","Data de Reg.");
DEFINE("_ADMIN_EVENTS_USERID","ID Utilizador");
DEFINE("_ADMIN_EVENTS_USERDELETE","Apagar");
DEFINE("_ADMIN_REGISTER_DEL"," Utilizador(es) Inscrito(s) apagado(s)");
DEFINE("_ADMIN_EVENTS_UNREGISTRA","Permitir aos utilizadores anular a sua inscriчуo?");
DEFINE("_EVENTS_REGISTRA_HEAD","Utilizadores Inscritos:");
DEFINE("_EVENTS_REGISTRA_ALLRE","Jс estс incrito para este Evento.");		//changed in 0.8.3
DEFINE("_EVENTS_REGISTRA_LOGIN","Terс que se autenticar para se inscrever neste Evento.");	//changed in 0.8.3
DEFINE("_EVENTS_REGISTRA_TOLATE","Jс щ demasiado tarde para se inscrever neste evento.");	//changed in 0.8.3
DEFINE("_EVENTS_REGISTRA_REG","Vou estar presente neste Evento:");
DEFINE("_EVENTS_REGISTRA_BUTTON","Increver");
DEFINE("_EVENTS_REGISTRA_SUCCESS","Foi inscrito neste evento com sucesso.");	//changed in 0.8.3
DEFINE("_EVENTS_REGISTRA_UNREG","Anular inscriчуo neste evento:");
DEFINE("_EVENTS_REGISTRA_BUTTON_UNREG","Anular Inscriчуo");
DEFINE("_EVENTS_REGISTER_DEL","Jс nуo estс inscrito neste evento");		//changed in 0.8.3

//new 0.8
DEFINE("_ADMIN_CATEGORIES_ACCESS","Acesso");
DEFINE("_ADMIN_EVENTS_ACCESS_DENIED","Accesso negado.");
DEFINE("_ADMIN_EVENTS_SETT_REG_OPTION1","Nуo");
DEFINE("_ADMIN_EVENTS_SETT_REG_OPTION2","Sim");

//new 0.8.6
DEFINE("_ADMIN_GDVERSION_TWO","GD versуo щ 2. criaчуo de imagens miniaturas ativo.");
DEFINE("_ADMIN_GDVERSION_ONE","GD versуo 1. Criaчуo de imagens miniaturas estс disligado.");

//new 0.8.7 (THX Horus_68)
DEFINE("_ADMIN_CHOOSE_CITY","Escolha uma localidade");
DEFINE("_ADMIN_CHOOSE_A_VENUE","Escolha um evento em");
DEFINE("_ADMIN_CHOOSE_A_CITY","Por favor, escolha uma localidade da lista");

//new 0.8.9 (THX Kapone_pt)
DEFINE("_ADMIN_EVENTS_ENDDATE","Data do Evento (fim):");
DEFINE("_ADMIN_EVENTS_INFOBUTTON_ERROR_MSG", "Escolheu o link para o botao de informaчуo, mas nуo colocou a largura para o mesmo. Por favor nуo coloque o link para o botao de infomaчуo  ( na Tab de Configuraчѕes Basicas) ou coloque a largura para o botao de informaчуo (na Tab Layout)");
DEFINE("_ADMIN_EVENTS_SETT_SHOWFILTER","Mostrar filtro:");
DEFINE("_ADMIN_EVENTS_SETT_SHOWFILTER_DESC","Mostrar o campo do filtro na pсgina.");
?>
<?php
// auto-generated by sfRoutingConfigHandler
// date: 2020/02/17 16:17:30
$this->routes['category'] = unserialize('C:13:"sfPropelRoute":1415:{a:11:{i:0;a:4:{i:0;a:4:{i:0;s:9:"separator";i:1;s:0:"";i:2;s:1:"/";i:3;N;}i:1;a:4:{i:0;s:4:"text";i:1;s:1:"/";i:2;s:8:"category";i:3;N;}i:2;a:4:{i:0;s:9:"separator";i:1;s:0:"";i:2;s:1:"/";i:3;N;}i:3;a:4:{i:0;s:8:"variable";i:1;s:1:"/";i:2;s:5:":slug";i:3;s:4:"slug";}}i:1;a:8:{s:18:"load_configuration";b:1;s:6:"suffix";s:0:"";s:14:"default_module";s:7:"default";s:14:"default_action";s:5:"index";s:5:"debug";s:1:"1";s:7:"logging";s:1:"1";s:21:"generate_shortest_url";b:1;s:32:"extra_parameters_as_query_string";b:1;}i:2;a:17:{s:6:"suffix";s:0:"";s:17:"variable_prefixes";a:1:{i:0;s:1:":";}s:18:"segment_separators";a:2:{i:0;s:1:"/";i:1;s:1:".";}s:14:"variable_regex";s:8:"[\\w\\d_]+";s:10:"text_regex";s:3:".+?";s:21:"generate_shortest_url";b:1;s:32:"extra_parameters_as_query_string";b:1;s:18:"load_configuration";b:1;s:14:"default_module";s:7:"default";s:14:"default_action";s:5:"index";s:5:"debug";s:1:"1";s:7:"logging";s:1:"1";s:5:"model";s:14:"JobeetCategory";s:4:"type";s:6:"object";s:21:"variable_prefix_regex";s:6:"(?:\\:)";s:24:"segment_separators_regex";s:8:"(?:/|\\.)";s:22:"variable_content_regex";s:7:"[^/\\.]+";}i:3;s:15:"/category/:slug";i:4;s:9:"/category";i:5;s:32:"#^/category/(?P<slug>[^/\\.]+)$#x";i:6;a:1:{s:4:"slug";s:5:":slug";}i:7;a:2:{s:6:"module";s:8:"category";s:6:"action";s:4:"show";}i:8;a:2:{s:9:"sf_method";a:2:{i:0;s:3:"get";i:1;s:4:"head";}s:4:"slug";s:7:"[^/\\.]+";}i:9;s:0:"";i:10;b:0;}}');
$this->routes['job'] = unserialize('C:13:"sfPropelRoute":1487:{a:11:{i:0;a:4:{i:0;a:4:{i:0;s:9:"separator";i:1;s:0:"";i:2;s:1:"/";i:3;N;}i:1;a:4:{i:0;s:4:"text";i:1;s:1:"/";i:2;s:3:"job";i:3;N;}i:2;a:4:{i:0;s:9:"separator";i:1;s:0:"";i:2;s:1:".";i:3;N;}i:3;a:4:{i:0;s:8:"variable";i:1;s:1:".";i:2;s:10:":sf_format";i:3;s:9:"sf_format";}}i:1;a:8:{s:18:"load_configuration";b:1;s:6:"suffix";s:0:"";s:14:"default_module";s:7:"default";s:14:"default_action";s:5:"index";s:5:"debug";s:1:"1";s:7:"logging";s:1:"1";s:21:"generate_shortest_url";b:1;s:32:"extra_parameters_as_query_string";b:1;}i:2;a:18:{s:6:"suffix";s:0:"";s:17:"variable_prefixes";a:1:{i:0;s:1:":";}s:18:"segment_separators";a:2:{i:0;s:1:"/";i:1;s:1:".";}s:14:"variable_regex";s:8:"[\\w\\d_]+";s:10:"text_regex";s:3:".+?";s:21:"generate_shortest_url";b:1;s:32:"extra_parameters_as_query_string";b:1;s:18:"load_configuration";b:1;s:14:"default_module";s:7:"default";s:14:"default_action";s:5:"index";s:5:"debug";s:1:"1";s:7:"logging";s:1:"1";s:5:"model";s:9:"JobeetJob";s:4:"type";s:4:"list";s:6:"method";N;s:21:"variable_prefix_regex";s:6:"(?:\\:)";s:24:"segment_separators_regex";s:8:"(?:/|\\.)";s:22:"variable_content_regex";s:7:"[^/\\.]+";}i:3;s:15:"/job.:sf_format";i:4;s:4:"/job";i:5;s:38:"#^/job(?:\\.(?P<sf_format>[^/\\.]+))?$#x";i:6;a:1:{s:9:"sf_format";s:10:":sf_format";}i:7;a:3:{s:6:"module";s:3:"job";s:6:"action";s:5:"index";s:9:"sf_format";s:4:"html";}i:8;a:3:{s:2:"id";s:3:"\\d+";s:9:"sf_method";a:2:{i:0;s:3:"get";i:1;s:4:"head";}s:9:"sf_format";s:7:"[^/\\.]+";}i:9;s:0:"";i:10;b:0;}}');
$this->routes['job_new'] = unserialize('C:13:"sfPropelRoute":1600:{a:11:{i:0;a:6:{i:0;a:4:{i:0;s:9:"separator";i:1;s:0:"";i:2;s:1:"/";i:3;N;}i:1;a:4:{i:0;s:4:"text";i:1;s:1:"/";i:2;s:3:"job";i:3;N;}i:2;a:4:{i:0;s:9:"separator";i:1;s:0:"";i:2;s:1:"/";i:3;N;}i:3;a:4:{i:0;s:4:"text";i:1;s:1:"/";i:2;s:3:"new";i:3;N;}i:4;a:4:{i:0;s:9:"separator";i:1;s:0:"";i:2;s:1:".";i:3;N;}i:5;a:4:{i:0;s:8:"variable";i:1;s:1:".";i:2;s:10:":sf_format";i:3;s:9:"sf_format";}}i:1;a:8:{s:18:"load_configuration";b:1;s:6:"suffix";s:0:"";s:14:"default_module";s:7:"default";s:14:"default_action";s:5:"index";s:5:"debug";s:1:"1";s:7:"logging";s:1:"1";s:21:"generate_shortest_url";b:1;s:32:"extra_parameters_as_query_string";b:1;}i:2;a:17:{s:6:"suffix";s:0:"";s:17:"variable_prefixes";a:1:{i:0;s:1:":";}s:18:"segment_separators";a:2:{i:0;s:1:"/";i:1;s:1:".";}s:14:"variable_regex";s:8:"[\\w\\d_]+";s:10:"text_regex";s:3:".+?";s:21:"generate_shortest_url";b:1;s:32:"extra_parameters_as_query_string";b:1;s:18:"load_configuration";b:1;s:14:"default_module";s:7:"default";s:14:"default_action";s:5:"index";s:5:"debug";s:1:"1";s:7:"logging";s:1:"1";s:5:"model";s:9:"JobeetJob";s:4:"type";s:6:"object";s:21:"variable_prefix_regex";s:6:"(?:\\:)";s:24:"segment_separators_regex";s:8:"(?:/|\\.)";s:22:"variable_content_regex";s:7:"[^/\\.]+";}i:3;s:19:"/job/new.:sf_format";i:4;s:8:"/job/new";i:5;s:42:"#^/job/new(?:\\.(?P<sf_format>[^/\\.]+))?$#x";i:6;a:1:{s:9:"sf_format";s:10:":sf_format";}i:7;a:3:{s:6:"module";s:3:"job";s:6:"action";s:3:"new";s:9:"sf_format";s:4:"html";}i:8;a:3:{s:2:"id";s:3:"\\d+";s:9:"sf_method";a:2:{i:0;s:3:"get";i:1;s:4:"head";}s:9:"sf_format";s:7:"[^/\\.]+";}i:9;s:0:"";i:10;b:0;}}');
$this->routes['job_create'] = unserialize('C:13:"sfPropelRoute":1461:{a:11:{i:0;a:4:{i:0;a:4:{i:0;s:9:"separator";i:1;s:0:"";i:2;s:1:"/";i:3;N;}i:1;a:4:{i:0;s:4:"text";i:1;s:1:"/";i:2;s:3:"job";i:3;N;}i:2;a:4:{i:0;s:9:"separator";i:1;s:0:"";i:2;s:1:".";i:3;N;}i:3;a:4:{i:0;s:8:"variable";i:1;s:1:".";i:2;s:10:":sf_format";i:3;s:9:"sf_format";}}i:1;a:8:{s:18:"load_configuration";b:1;s:6:"suffix";s:0:"";s:14:"default_module";s:7:"default";s:14:"default_action";s:5:"index";s:5:"debug";s:1:"1";s:7:"logging";s:1:"1";s:21:"generate_shortest_url";b:1;s:32:"extra_parameters_as_query_string";b:1;}i:2;a:17:{s:6:"suffix";s:0:"";s:17:"variable_prefixes";a:1:{i:0;s:1:":";}s:18:"segment_separators";a:2:{i:0;s:1:"/";i:1;s:1:".";}s:14:"variable_regex";s:8:"[\\w\\d_]+";s:10:"text_regex";s:3:".+?";s:21:"generate_shortest_url";b:1;s:32:"extra_parameters_as_query_string";b:1;s:18:"load_configuration";b:1;s:14:"default_module";s:7:"default";s:14:"default_action";s:5:"index";s:5:"debug";s:1:"1";s:7:"logging";s:1:"1";s:5:"model";s:9:"JobeetJob";s:4:"type";s:6:"object";s:21:"variable_prefix_regex";s:6:"(?:\\:)";s:24:"segment_separators_regex";s:8:"(?:/|\\.)";s:22:"variable_content_regex";s:7:"[^/\\.]+";}i:3;s:15:"/job.:sf_format";i:4;s:4:"/job";i:5;s:38:"#^/job(?:\\.(?P<sf_format>[^/\\.]+))?$#x";i:6;a:1:{s:9:"sf_format";s:10:":sf_format";}i:7;a:3:{s:6:"module";s:3:"job";s:6:"action";s:6:"create";s:9:"sf_format";s:4:"html";}i:8;a:3:{s:2:"id";s:3:"\\d+";s:9:"sf_method";a:1:{i:0;s:4:"post";}s:9:"sf_format";s:7:"[^/\\.]+";}i:9;s:0:"";i:10;b:0;}}');
$this->routes['job_edit'] = unserialize('C:13:"sfPropelRoute":1777:{a:11:{i:0;a:8:{i:0;a:4:{i:0;s:9:"separator";i:1;s:0:"";i:2;s:1:"/";i:3;N;}i:1;a:4:{i:0;s:4:"text";i:1;s:1:"/";i:2;s:3:"job";i:3;N;}i:2;a:4:{i:0;s:9:"separator";i:1;s:0:"";i:2;s:1:"/";i:3;N;}i:3;a:4:{i:0;s:8:"variable";i:1;s:1:"/";i:2;s:3:":id";i:3;s:2:"id";}i:4;a:4:{i:0;s:9:"separator";i:1;s:0:"";i:2;s:1:"/";i:3;N;}i:5;a:4:{i:0;s:4:"text";i:1;s:1:"/";i:2;s:4:"edit";i:3;N;}i:6;a:4:{i:0;s:9:"separator";i:1;s:0:"";i:2;s:1:".";i:3;N;}i:7;a:4:{i:0;s:8:"variable";i:1;s:1:".";i:2;s:10:":sf_format";i:3;s:9:"sf_format";}}i:1;a:8:{s:18:"load_configuration";b:1;s:6:"suffix";s:0:"";s:14:"default_module";s:7:"default";s:14:"default_action";s:5:"index";s:5:"debug";s:1:"1";s:7:"logging";s:1:"1";s:21:"generate_shortest_url";b:1;s:32:"extra_parameters_as_query_string";b:1;}i:2;a:18:{s:6:"suffix";s:0:"";s:17:"variable_prefixes";a:1:{i:0;s:1:":";}s:18:"segment_separators";a:2:{i:0;s:1:"/";i:1;s:1:".";}s:14:"variable_regex";s:8:"[\\w\\d_]+";s:10:"text_regex";s:3:".+?";s:21:"generate_shortest_url";b:1;s:32:"extra_parameters_as_query_string";b:1;s:18:"load_configuration";b:1;s:14:"default_module";s:7:"default";s:14:"default_action";s:5:"index";s:5:"debug";s:1:"1";s:7:"logging";s:1:"1";s:5:"model";s:9:"JobeetJob";s:4:"type";s:6:"object";s:6:"method";N;s:21:"variable_prefix_regex";s:6:"(?:\\:)";s:24:"segment_separators_regex";s:8:"(?:/|\\.)";s:22:"variable_content_regex";s:7:"[^/\\.]+";}i:3;s:24:"/job/:id/edit.:sf_format";i:4;s:4:"/job";i:5;s:55:"#^/job/(?P<id>\\d+)/edit(?:\\.(?P<sf_format>[^/\\.]+))?$#x";i:6;a:2:{s:2:"id";s:3:":id";s:9:"sf_format";s:10:":sf_format";}i:7;a:3:{s:6:"module";s:3:"job";s:6:"action";s:4:"edit";s:9:"sf_format";s:4:"html";}i:8;a:3:{s:2:"id";s:3:"\\d+";s:9:"sf_method";a:2:{i:0;s:3:"get";i:1;s:4:"head";}s:9:"sf_format";s:7:"[^/\\.]+";}i:9;s:0:"";i:10;b:0;}}');
$this->routes['job_update'] = unserialize('C:13:"sfPropelRoute":1637:{a:11:{i:0;a:6:{i:0;a:4:{i:0;s:9:"separator";i:1;s:0:"";i:2;s:1:"/";i:3;N;}i:1;a:4:{i:0;s:4:"text";i:1;s:1:"/";i:2;s:3:"job";i:3;N;}i:2;a:4:{i:0;s:9:"separator";i:1;s:0:"";i:2;s:1:"/";i:3;N;}i:3;a:4:{i:0;s:8:"variable";i:1;s:1:"/";i:2;s:3:":id";i:3;s:2:"id";}i:4;a:4:{i:0;s:9:"separator";i:1;s:0:"";i:2;s:1:".";i:3;N;}i:5;a:4:{i:0;s:8:"variable";i:1;s:1:".";i:2;s:10:":sf_format";i:3;s:9:"sf_format";}}i:1;a:8:{s:18:"load_configuration";b:1;s:6:"suffix";s:0:"";s:14:"default_module";s:7:"default";s:14:"default_action";s:5:"index";s:5:"debug";s:1:"1";s:7:"logging";s:1:"1";s:21:"generate_shortest_url";b:1;s:32:"extra_parameters_as_query_string";b:1;}i:2;a:18:{s:6:"suffix";s:0:"";s:17:"variable_prefixes";a:1:{i:0;s:1:":";}s:18:"segment_separators";a:2:{i:0;s:1:"/";i:1;s:1:".";}s:14:"variable_regex";s:8:"[\\w\\d_]+";s:10:"text_regex";s:3:".+?";s:21:"generate_shortest_url";b:1;s:32:"extra_parameters_as_query_string";b:1;s:18:"load_configuration";b:1;s:14:"default_module";s:7:"default";s:14:"default_action";s:5:"index";s:5:"debug";s:1:"1";s:7:"logging";s:1:"1";s:5:"model";s:9:"JobeetJob";s:4:"type";s:6:"object";s:6:"method";N;s:21:"variable_prefix_regex";s:6:"(?:\\:)";s:24:"segment_separators_regex";s:8:"(?:/|\\.)";s:22:"variable_content_regex";s:7:"[^/\\.]+";}i:3;s:19:"/job/:id.:sf_format";i:4;s:4:"/job";i:5;s:50:"#^/job/(?P<id>\\d+)(?:\\.(?P<sf_format>[^/\\.]+))?$#x";i:6;a:2:{s:2:"id";s:3:":id";s:9:"sf_format";s:10:":sf_format";}i:7;a:3:{s:6:"module";s:3:"job";s:6:"action";s:6:"update";s:9:"sf_format";s:4:"html";}i:8;a:3:{s:2:"id";s:3:"\\d+";s:9:"sf_method";a:1:{i:0;s:3:"put";}s:9:"sf_format";s:7:"[^/\\.]+";}i:9;s:0:"";i:10;b:0;}}');
$this->routes['job_delete'] = unserialize('C:13:"sfPropelRoute":1640:{a:11:{i:0;a:6:{i:0;a:4:{i:0;s:9:"separator";i:1;s:0:"";i:2;s:1:"/";i:3;N;}i:1;a:4:{i:0;s:4:"text";i:1;s:1:"/";i:2;s:3:"job";i:3;N;}i:2;a:4:{i:0;s:9:"separator";i:1;s:0:"";i:2;s:1:"/";i:3;N;}i:3;a:4:{i:0;s:8:"variable";i:1;s:1:"/";i:2;s:3:":id";i:3;s:2:"id";}i:4;a:4:{i:0;s:9:"separator";i:1;s:0:"";i:2;s:1:".";i:3;N;}i:5;a:4:{i:0;s:8:"variable";i:1;s:1:".";i:2;s:10:":sf_format";i:3;s:9:"sf_format";}}i:1;a:8:{s:18:"load_configuration";b:1;s:6:"suffix";s:0:"";s:14:"default_module";s:7:"default";s:14:"default_action";s:5:"index";s:5:"debug";s:1:"1";s:7:"logging";s:1:"1";s:21:"generate_shortest_url";b:1;s:32:"extra_parameters_as_query_string";b:1;}i:2;a:18:{s:6:"suffix";s:0:"";s:17:"variable_prefixes";a:1:{i:0;s:1:":";}s:18:"segment_separators";a:2:{i:0;s:1:"/";i:1;s:1:".";}s:14:"variable_regex";s:8:"[\\w\\d_]+";s:10:"text_regex";s:3:".+?";s:21:"generate_shortest_url";b:1;s:32:"extra_parameters_as_query_string";b:1;s:18:"load_configuration";b:1;s:14:"default_module";s:7:"default";s:14:"default_action";s:5:"index";s:5:"debug";s:1:"1";s:7:"logging";s:1:"1";s:5:"model";s:9:"JobeetJob";s:4:"type";s:6:"object";s:6:"method";N;s:21:"variable_prefix_regex";s:6:"(?:\\:)";s:24:"segment_separators_regex";s:8:"(?:/|\\.)";s:22:"variable_content_regex";s:7:"[^/\\.]+";}i:3;s:19:"/job/:id.:sf_format";i:4;s:4:"/job";i:5;s:50:"#^/job/(?P<id>\\d+)(?:\\.(?P<sf_format>[^/\\.]+))?$#x";i:6;a:2:{s:2:"id";s:3:":id";s:9:"sf_format";s:10:":sf_format";}i:7;a:3:{s:6:"module";s:3:"job";s:6:"action";s:6:"delete";s:9:"sf_format";s:4:"html";}i:8;a:3:{s:2:"id";s:3:"\\d+";s:9:"sf_method";a:1:{i:0;s:6:"delete";}s:9:"sf_format";s:7:"[^/\\.]+";}i:9;s:0:"";i:10;b:0;}}');
$this->routes['job_show'] = unserialize('C:13:"sfPropelRoute":1650:{a:11:{i:0;a:6:{i:0;a:4:{i:0;s:9:"separator";i:1;s:0:"";i:2;s:1:"/";i:3;N;}i:1;a:4:{i:0;s:4:"text";i:1;s:1:"/";i:2;s:3:"job";i:3;N;}i:2;a:4:{i:0;s:9:"separator";i:1;s:0:"";i:2;s:1:"/";i:3;N;}i:3;a:4:{i:0;s:8:"variable";i:1;s:1:"/";i:2;s:3:":id";i:3;s:2:"id";}i:4;a:4:{i:0;s:9:"separator";i:1;s:0:"";i:2;s:1:".";i:3;N;}i:5;a:4:{i:0;s:8:"variable";i:1;s:1:".";i:2;s:10:":sf_format";i:3;s:9:"sf_format";}}i:1;a:8:{s:18:"load_configuration";b:1;s:6:"suffix";s:0:"";s:14:"default_module";s:7:"default";s:14:"default_action";s:5:"index";s:5:"debug";s:1:"1";s:7:"logging";s:1:"1";s:21:"generate_shortest_url";b:1;s:32:"extra_parameters_as_query_string";b:1;}i:2;a:18:{s:6:"suffix";s:0:"";s:17:"variable_prefixes";a:1:{i:0;s:1:":";}s:18:"segment_separators";a:2:{i:0;s:1:"/";i:1;s:1:".";}s:14:"variable_regex";s:8:"[\\w\\d_]+";s:10:"text_regex";s:3:".+?";s:21:"generate_shortest_url";b:1;s:32:"extra_parameters_as_query_string";b:1;s:18:"load_configuration";b:1;s:14:"default_module";s:7:"default";s:14:"default_action";s:5:"index";s:5:"debug";s:1:"1";s:7:"logging";s:1:"1";s:5:"model";s:9:"JobeetJob";s:4:"type";s:6:"object";s:6:"method";N;s:21:"variable_prefix_regex";s:6:"(?:\\:)";s:24:"segment_separators_regex";s:8:"(?:/|\\.)";s:22:"variable_content_regex";s:7:"[^/\\.]+";}i:3;s:19:"/job/:id.:sf_format";i:4;s:4:"/job";i:5;s:50:"#^/job/(?P<id>\\d+)(?:\\.(?P<sf_format>[^/\\.]+))?$#x";i:6;a:2:{s:2:"id";s:3:":id";s:9:"sf_format";s:10:":sf_format";}i:7;a:3:{s:6:"module";s:3:"job";s:6:"action";s:4:"show";s:9:"sf_format";s:4:"html";}i:8;a:3:{s:2:"id";s:3:"\\d+";s:9:"sf_method";a:2:{i:0;s:3:"get";i:1;s:4:"head";}s:9:"sf_format";s:7:"[^/\\.]+";}i:9;s:0:"";i:10;b:0;}}');
$this->routes['job_show_user'] = unserialize('C:13:"sfPropelRoute":2155:{a:11:{i:0;a:10:{i:0;a:4:{i:0;s:9:"separator";i:1;s:0:"";i:2;s:1:"/";i:3;N;}i:1;a:4:{i:0;s:4:"text";i:1;s:1:"/";i:2;s:3:"job";i:3;N;}i:2;a:4:{i:0;s:9:"separator";i:1;s:0:"";i:2;s:1:"/";i:3;N;}i:3;a:4:{i:0;s:8:"variable";i:1;s:1:"/";i:2;s:13:":company_slug";i:3;s:12:"company_slug";}i:4;a:4:{i:0;s:9:"separator";i:1;s:0:"";i:2;s:1:"/";i:3;N;}i:5;a:4:{i:0;s:8:"variable";i:1;s:1:"/";i:2;s:14:":location_slug";i:3;s:13:"location_slug";}i:6;a:4:{i:0;s:9:"separator";i:1;s:0:"";i:2;s:1:"/";i:3;N;}i:7;a:4:{i:0;s:8:"variable";i:1;s:1:"/";i:2;s:3:":id";i:3;s:2:"id";}i:8;a:4:{i:0;s:9:"separator";i:1;s:0:"";i:2;s:1:"/";i:3;N;}i:9;a:4:{i:0;s:8:"variable";i:1;s:1:"/";i:2;s:14:":position_slug";i:3;s:13:"position_slug";}}i:1;a:8:{s:18:"load_configuration";b:1;s:6:"suffix";s:0:"";s:14:"default_module";s:7:"default";s:14:"default_action";s:5:"index";s:5:"debug";s:1:"1";s:7:"logging";s:1:"1";s:21:"generate_shortest_url";b:1;s:32:"extra_parameters_as_query_string";b:1;}i:2;a:17:{s:6:"suffix";s:0:"";s:17:"variable_prefixes";a:1:{i:0;s:1:":";}s:18:"segment_separators";a:2:{i:0;s:1:"/";i:1;s:1:".";}s:14:"variable_regex";s:8:"[\\w\\d_]+";s:10:"text_regex";s:3:".+?";s:21:"generate_shortest_url";b:1;s:32:"extra_parameters_as_query_string";b:1;s:18:"load_configuration";b:1;s:14:"default_module";s:7:"default";s:14:"default_action";s:5:"index";s:5:"debug";s:1:"1";s:7:"logging";s:1:"1";s:5:"model";s:9:"JobeetJob";s:4:"type";s:6:"object";s:21:"variable_prefix_regex";s:6:"(?:\\:)";s:24:"segment_separators_regex";s:8:"(?:/|\\.)";s:22:"variable_content_regex";s:7:"[^/\\.]+";}i:3;s:52:"/job/:company_slug/:location_slug/:id/:position_slug";i:4;s:4:"/job";i:5;s:101:"#^/job/(?P<company_slug>[^/\\.]+)/(?P<location_slug>[^/\\.]+)/(?P<id>\\d+)/(?P<position_slug>[^/\\.]+)$#x";i:6;a:4:{s:12:"company_slug";s:13:":company_slug";s:13:"location_slug";s:14:":location_slug";s:2:"id";s:3:":id";s:13:"position_slug";s:14:":position_slug";}i:7;a:2:{s:6:"module";s:3:"job";s:6:"action";s:4:"show";}i:8;a:5:{s:2:"id";s:3:"\\d+";s:9:"sf_method";a:1:{i:0;s:3:"get";}s:12:"company_slug";s:7:"[^/\\.]+";s:13:"location_slug";s:7:"[^/\\.]+";s:13:"position_slug";s:7:"[^/\\.]+";}i:9;s:0:"";i:10;b:0;}}');
$this->routes['homepage'] = unserialize('C:7:"sfRoute":1065:{a:11:{i:0;a:2:{i:0;a:4:{i:0;s:9:"separator";i:1;s:0:"";i:2;s:1:"/";i:3;N;}i:1;a:3:{i:0;s:9:"separator";i:1;s:1:"/";i:2;s:1:"/";}}i:1;a:8:{s:18:"load_configuration";b:1;s:6:"suffix";s:0:"";s:14:"default_module";s:7:"default";s:14:"default_action";s:5:"index";s:5:"debug";s:1:"1";s:7:"logging";s:1:"1";s:21:"generate_shortest_url";b:1;s:32:"extra_parameters_as_query_string";b:1;}i:2;a:15:{s:6:"suffix";s:0:"";s:17:"variable_prefixes";a:1:{i:0;s:1:":";}s:18:"segment_separators";a:2:{i:0;s:1:"/";i:1;s:1:".";}s:14:"variable_regex";s:8:"[\\w\\d_]+";s:10:"text_regex";s:3:".+?";s:21:"generate_shortest_url";b:1;s:32:"extra_parameters_as_query_string";b:1;s:18:"load_configuration";b:1;s:14:"default_module";s:7:"default";s:14:"default_action";s:5:"index";s:5:"debug";s:1:"1";s:7:"logging";s:1:"1";s:21:"variable_prefix_regex";s:6:"(?:\\:)";s:24:"segment_separators_regex";s:8:"(?:/|\\.)";s:22:"variable_content_regex";s:7:"[^/\\.]+";}i:3;s:1:"/";i:4;s:0:"";i:5;s:6:"#^/$#x";i:6;a:0:{}i:7;a:2:{s:6:"module";s:3:"job";s:6:"action";s:5:"index";}i:8;a:0:{}i:9;s:1:"/";i:10;b:0;}}');

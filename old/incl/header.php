<?php
function printHeader($page){
    echo "<!DOCTYPE html>\n";
    echo "<html lang=\"en\">\n";
    echo "    <head>\n";
    echo "         <meta charset=\"UTF-8\">\n";
    echo "         <title>Rob van der Goot</title>\n";
    if ($page == "home")
    {
        echo "         <link rel=\"stylesheet\" media=\"screen and (min-width: 1000px)\" href=\"css/big.css\" />\n";
        echo "         <link rel=\"stylesheet\" media=\"screen and (max-width: 1000px)\" href=\"css/small.css\"/>\n";
        echo "        <link rel=\"icon\" href=\"favicon.ico\" type=\"image/x-icon\" />\n";
    }
    else
    {
        echo "         <link rel=\"stylesheet\" media=\"screen and (min-width: 1000px)\" href=\"../css/big.css\" />\n";
        echo "         <link rel=\"stylesheet\" media=\"screen and (max-width: 1000px)\" href=\"../css/small.css\"/>\n";
        echo "        <link rel=\"icon\" href=\"../favicon.ico\" type=\"image/x-icon\" />\n";
    }
    echo "     </head>\n";
    echo "     <body>\n";
    echo "         <div id=\"wrapper\">\n";
    echo "             <div id=\"menu\">\n";
    echo "                <div id=\"menuText\">\n";
    echo "                Menu\n";
    echo "                </div>\n";

    echo "                 <div id=\"buttonWrapper\">\n";
    if ($page == "home")
    {
        echo "                     <a class=\"button\" href=\"#\">Home</a>\n";
        echo "                     <a class=\"button\" href=\"papers/\">Papers</a>\n";
        //echo "                     <a class=\"button\" href=\"blog\">Blog</a>\n";
        //echo "                     <a class=\"button\" href=\"projects/\">Projects</a>\n";
        echo "                     <a class=\"button\" href=\"cv/\">CV</a>\n";
        echo "                     <a class=\"button\" href=\"datasets/\">Datasets</a>\n";
        echo "                     <a class=\"button\" href=\"demos/\">Demos</a>\n";
        echo "                     <a class=\"button\" href=\"thesisProjects/\">Thesis Projects</a>\n";
    }
    else
    {
        echo "                     <a class=\"button\" href=\"../\">Home</a>\n";
        echo "                     <a class=\"button\" href=\"../papers/\">Papers</a>\n";
        //echo "                     <a class=\"button\" href=\"../blog\">Blog</a>\n";
        //echo "                     <a class=\"button\" href=\"../projects/\">Projects</a>\n";
        echo "                     <a class=\"button\" href=\"../cv/\">CV</a>\n";
        echo "                     <a class=\"button\" href=\"../datasets/\">Datasets</a>\n";
        echo "                     <a class=\"button\" href=\"../demos/\">Demos</a>\n";
        echo "                     <a class=\"button\" href=\"../thesisProjects/\">Thesis Projects</a>\n";
    }
    echo "                 </div>\n";
    echo "             </div>\n";
    echo "             <div id=\"content\">\n";
}
?>

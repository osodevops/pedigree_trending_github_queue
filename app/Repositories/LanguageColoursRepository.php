<?php

namespace App\Repositories;

class LanguageColoursRepository
{
    /** @var string */
    public const DEFAULT_COLOUR = "#222";

    /** @var array */
    protected $data = [
        "1c-enterprise" => "#814CCC",
        "4d" => "#F3F4F6",
        "abap" => "#E8274B",
        "actionscript" => "#882B0F",
        "ada" => "#02F88C",
        "agda" => "#315665",
        "ags-script" => "#B9D9FF",
        "al" => "#3AA2B5",
        "alloy" => "#64C800",
        "alpine-abuild" => "#F3F4F6",
        "ampl" => "#E6EFBB",
        "angelscript" => "#C7D7DC",
        "antlr" => "#9DC3FF",
        "apex" => "#1797C0",
        "api-blueprint" => "#2ACCA8",
        "apl" => "#5A8164",
        "apollo-guidance-computer" => "#0B3D91",
        "applescript" => "#101F1F",
        "arc" => "#AA2AFE",
        "asl" => "#F3F4F6",
        "asp.net" => "#9400FF",
        "aspectj" => "#A957B0",
        "assembly" => "#6E4C13",
        "asymptote" => "#FF0000",
        "ats" => "#1AC620",
        "augeas" => "#F3F4F6",
        "autohotkey" => "#6594B9",
        "autoit" => "#1C3552",
        "awk" => "#F3F4F6",
        "ballerina" => "#FF5000",
        "batchfile" => "#C1F12E",
        "befunge" => "#F3F4F6",
        "bison" => "#6A463F",
        "bitbake" => "#F3F4F6",
        "blade" => "#F7523F",
        "blitzbasic" => "#F3F4F6",
        "blitzmax" => "#CD6400",
        "bluespec" => "#F3F4F6",
        "boo" => "#D4BEC1",
        "brainfuck" => "#2F2530",
        "brightscript" => "#F3F4F6",
        "browserslist" => "#FFD539",
        "c" => "#555555",
        "c#" => "#178600",
        "c++" => "#F34B7D",
        "c2hs-haskell" => "#F3F4F6",
        "cap'n-proto" => "#F3F4F6",
        "cartocss" => "#F3F4F6",
        "ceylon" => "#DFA535",
        "chapel" => "#8DC63F",
        "charity" => "#F3F4F6",
        "chuck" => "#F3F4F6",
        "cirru" => "#CCCCFF",
        "clarion" => "#DB901E",
        "classic-asp" => "#6A40FD",
        "clean" => "#3F85AF",
        "click" => "#E4E6F3",
        "clips" => "#F3F4F6",
        "clojure" => "#DB5855",
        "cmake" => "#F3F4F6",
        "cobol" => "#F3F4F6",
        "codeql" => "#F3F4F6",
        "coffeescript" => "#244776",
        "coldfusion" => "#ED2CD6",
        "coldfusion-cfc" => "#ED2CD6",
        "common-lisp" => "#3FB68B",
        "common-workflow-language" => "#B5314C",
        "component-pascal" => "#B0CE4E",
        "cool" => "#F3F4F6",
        "coq" => "#F3F4F6",
        "crystal" => "#000100",
        "cson" => "#244776",
        "csound" => "#F3F4F6",
        "csound-document" => "#F3F4F6",
        "csound-score" => "#F3F4F6",
        "css" => "#563D7C",
        "cuda" => "#3A4E3A",
        "cweb" => "#F3F4F6",
        "cycript" => "#F3F4F6",
        "cython" => "#F3F4F6",
        "d" => "#BA595E",
        "dafny" => "#FFEC25",
        "dart" => "#00B4AB",
        "dataweave" => "#003A52",
        "dhall" => "#DFAFFF",
        "digital-command-language" => "#F3F4F6",
        "dm" => "#447265",
        "dockerfile" => "#384D54",
        "dogescript" => "#CCA760",
        "dtrace" => "#F3F4F6",
        "dylan" => "#6C616E",
        "e" => "#CCCE35",
        "ec" => "#913960",
        "ecl" => "#8A1267",
        "eclipse" => "#F3F4F6",
        "eiffel" => "#4D6977",
        "ejs" => "#A91E50",
        "elixir" => "#6E4A7E",
        "elm" => "#60B5CC",
        "emacs-lisp" => "#C065DB",
        "emberscript" => "#FFF4F3",
        "eq" => "#A78649",
        "erlang" => "#B83998",
        "f#" => "#B845FC",
        "f*" => "#572E30",
        "factor" => "#636746",
        "fancy" => "#7B9DB4",
        "fantom" => "#14253C",
        "faust" => "#C37240",
        "filebench-wml" => "#F3F4F6",
        "filterscript" => "#F3F4F6",
        "fish" => "#F3F4F6",
        "flux" => "#88CCFF",
        "forth" => "#341708",
        "fortran" => "#4D41B1",
        "fortran-free-form" => "#F3F4F6",
        "freemarker" => "#0050B2",
        "frege" => "#00CAFE",
        "futhark" => "#5F021F",
        "g-code" => "#D08CF2",
        "game-maker-language" => "#71B417",
        "gaml" => "#FFC766",
        "gams" => "#F3F4F6",
        "gap" => "#F3F4F6",
        "gcc-machine-description" => "#F3F4F6",
        "gdb" => "#F3F4F6",
        "gdscript" => "#355570",
        "genie" => "#FB855D",
        "genshi" => "#F3F4F6",
        "gentoo-ebuild" => "#F3F4F6",
        "gentoo-eclass" => "#F3F4F6",
        "gherkin" => "#5B2063",
        "glsl" => "#F3F4F6",
        "glyph" => "#C1AC7F",
        "gnuplot" => "#F0A9F0",
        "go" => "#00ADD8",
        "golo" => "#88562A",
        "gosu" => "#82937F",
        "grace" => "#F3F4F6",
        "grammatical-framework" => "#FF0000",
        "graphql" => "#E10098",
        "groovy" => "#E69F56",
        "groovy-server-pages" => "#F3F4F6",
        "hack" => "#878787",
        "haml" => "#ECE2A9",
        "handlebars" => "#F7931E",
        "harbour" => "#0E60E3",
        "haskell" => "#5E5086",
        "haxe" => "#DF7900",
        "hcl" => "#F3F4F6",
        "hiveql" => "#DCE200",
        "hlsl" => "#F3F4F6",
        "holyc" => "#FFEFAF",
        "html" => "#E34C26",
        "hy" => "#7790B2",
        "hyphy" => "#F3F4F6",
        "idl" => "#A3522F",
        "idris" => "#B30000",
        "igor-pro" => "#0000CC",
        "inform-7" => "#F3F4F6",
        "inno-setup" => "#F3F4F6",
        "io" => "#A9188D",
        "ioke" => "#078193",
        "isabelle" => "#FEFE00",
        "isabelle-root" => "#F3F4F6",
        "j" => "#9EEDFF",
        "jasmin" => "#F3F4F6",
        "java" => "#B07219",
        "java-server-pages" => "#F3F4F6",
        "javascript" => "#F1E05A",
        "javascript+erb" => "#F3F4F6",
        "jflex" => "#DBCA00",
        "jison" => "#F3F4F6",
        "jison-lex" => "#F3F4F6",
        "jolie" => "#843179",
        "jsoniq" => "#40D47E",
        "jsonnet" => "#0064BD",
        "" => "#F3F4F6",
        "julia" => "#A270BA",
        "jupyter-notebook" => "#DA5B0B",
        "kaitai-struct" => "#773B37",
        "kotlin" => "#F18E33",
        "krl" => "#28430A",
        "labview" => "#F3F4F6",
        "lark" => "#0B130F",
        "lasso" => "#999999",
        "latte" => "#F2A542",
        "lean" => "#F3F4F6",
        "less" => "#1D365D",
        "lex" => "#DBCA00",
        "lfe" => "#4C3023",
        "lilypond" => "#F3F4F6",
        "limbo" => "#F3F4F6",
        "literate-agda" => "#F3F4F6",
        "literate-coffeescript" => "#F3F4F6",
        "literate-haskell" => "#F3F4F6",
        "livescript" => "#499886",
        "llvm" => "#185619",
        "logos" => "#F3F4F6",
        "logtalk" => "#F3F4F6",
        "lolcode" => "#CC9900",
        "lookml" => "#652B81",
        "loomscript" => "#F3F4F6",
        "lsl" => "#3D9970",
        "lua" => "#000080",
        "m" => "#F3F4F6",
        "m4" => "#F3F4F6",
        "m4sugar" => "#F3F4F6",
        "macaulay2" => "#D8FFFF",
        "makefile" => "#427819",
        "mako" => "#F3F4F6",
        "markdown" => "#083FA1",
        "marko" => "#42BFF2",
        "mask" => "#F97732",
        "mathematica" => "#F3F4F6",
        "matlab" => "#E16737",
        "max" => "#C4A79C",
        "maxscript" => "#00A6A6",
        "mcfunction" => "#E22837",
        "mercury" => "#FF2B2B",
        "meson" => "#007800",
        "metal" => "#8F14E9",
        "minid" => "#F3F4F6",
        "mirah" => "#C7A938",
        "mirc-script" => "#3D57C3",
        "mlir" => "#5EC8DB",
        "modelica" => "#F3F4F6",
        "modula-2" => "#F3F4F6",
        "modula-3" => "#223388",
        "module-management-system" => "#F3F4F6",
        "monkey" => "#F3F4F6",
        "moocode" => "#F3F4F6",
        "moonscript" => "#F3F4F6",
        "motorola-68k-assembly" => "#F3F4F6",
        "mql4" => "#62A8D6",
        "mql5" => "#4A76B8",
        "mtml" => "#B7E1F4",
        "muf" => "#F3F4F6",
        "mupad" => "#F3F4F6",
        "myghty" => "#F3F4F6",
        "nasl" => "#F3F4F6",
        "ncl" => "#28431F",
        "nearley" => "#990000",
        "nemerle" => "#3D3C6E",
        "nesc" => "#94B0C7",
        "netlinx" => "#0AA0FF",
        "netlinx+erb" => "#747FAA",
        "netlogo" => "#FF6375",
        "newlisp" => "#87AED7",
        "nextflow" => "#3AC486",
        "nim" => "#FFC200",
        "nit" => "#009917",
        "nix" => "#7E7EFF",
        "nsis" => "#F3F4F6",
        "nu" => "#C9DF40",
        "numpy" => "#9C8AF9",
        "nwscript" => "#111522",
        "objective-c" => "#438EFF",
        "objective-c++" => "#6866FB",
        "objective-j" => "#FF0C5A",
        "objectscript" => "#424893",
        "ocaml" => "#3BE133",
        "odin" => "#60AFFE",
        "omgrofl" => "#CABBFF",
        "ooc" => "#B0B77E",
        "opa" => "#F3F4F6",
        "opal" => "#F7EDE0",
        "open-policy-agent" => "#F3F4F6",
        "opencl" => "#F3F4F6",
        "openedge-abl" => "#F3F4F6",
        "openqasm" => "#AA70FF",
        "openrc-runscript" => "#F3F4F6",
        "openscad" => "#F3F4F6",
        "ox" => "#F3F4F6",
        "oxygene" => "#CDD0E3",
        "oz" => "#FAB738",
        "p4" => "#7055B5",
        "pan" => "#CC0000",
        "papyrus" => "#6600CC",
        "parrot" => "#F3CA0A",
        "parrot-assembly" => "#F3F4F6",
        "parrot-internal-representation" => "#F3F4F6",
        "pascal" => "#E3F171",
        "pawn" => "#DBB284",
        "pep8" => "#C76F5B",
        "perl" => "#0298C3",
        "php" => "#4F5D95",
        "picolisp" => "#F3F4F6",
        "piglatin" => "#FCD7DE",
        "pike" => "#005390",
        "plpgsql" => "#F3F4F6",
        "plsql" => "#DAD8D8",
        "pogoscript" => "#D80074",
        "pony" => "#F3F4F6",
        "postscript" => "#DA291C",
        "pov-ray-sdl" => "#F3F4F6",
        "powerbuilder" => "#8F0F8D",
        "powershell" => "#012456",
        "prisma" => "#0C344B",
        "processing" => "#0096D8",
        "prolog" => "#74283C",
        "propeller-spin" => "#7FA2A7",
        "pug" => "#A86454",
        "puppet" => "#302B6D",
        "purebasic" => "#5A6986",
        "purescript" => "#1D222D",
        "python" => "#3572A5",
        "python-console" => "#F3F4F6",
        "q" => "#0040CD",
        "q#" => "#FED659",
        "qmake" => "#F3F4F6",
        "qml" => "#44A51C",
        "qt-script" => "#00B841",
        "quake" => "#882233",
        "r" => "#198CE7",
        "racket" => "#3C5CAA",
        "ragel" => "#9D5200",
        "raku" => "#0000FB",
        "raml" => "#77D9FB",
        "rascal" => "#FFFAA0",
        "realbasic" => "#F3F4F6",
        "reason" => "#FF5847",
        "rebol" => "#358A5B",
        "red" => "#F50000",
        "redcode" => "#F3F4F6",
        "ren'py" => "#FF7F7F",
        "renderscript" => "#F3F4F6",
        "rescript" => "#ED5051",
        "rexx" => "#F3F4F6",
        "ring" => "#2D54CB",
        "riot" => "#A71E49",
        "robotframework" => "#F3F4F6",
        "roff" => "#ECDEBE",
        "rouge" => "#CC0088",
        "rpc" => "#F3F4F6",
        "ruby" => "#701516",
        "runoff" => "#665A4E",
        "rust" => "#DEA584",
        "sage" => "#F3F4F6",
        "saltstack" => "#646464",
        "sas" => "#B34936",
        "sass" => "#A53B70",
        "scala" => "#C22D40",
        "scheme" => "#1E4AEC",
        "scilab" => "#F3F4F6",
        "scss" => "#C6538C",
        "sed" => "#64B970",
        "self" => "#0579AA",
        "shaderlab" => "#F3F4F6",
        "shell" => "#89E051",
        "shellsession" => "#F3F4F6",
        "shen" => "#120F14",
        "sieve" => "#F3F4F6",
        "slash" => "#007EFF",
        "slice" => "#003FA2",
        "slim" => "#2B2B2B",
        "smali" => "#F3F4F6",
        "smalltalk" => "#596706",
        "smarty" => "#F3F4F6",
        "smpl" => "#C94949",
        "smt" => "#F3F4F6",
        "solidity" => "#AA6746",
        "sourcepawn" => "#F69E1D",
        "sqf" => "#3F3F3F",
        "sqlpl" => "#F3F4F6",
        "squirrel" => "#800000",
        "srecode-template" => "#348A34",
        "stan" => "#B2011D",
        "standard-ml" => "#DC566D",
        "starlark" => "#76D275",
        "stata" => "#F3F4F6",
        "stylus" => "#FF6347",
        "supercollider" => "#46390B",
        "svelte" => "#FF3E00",
        "svg" => "#FF9900",
        "swift" => "#FFAC45",
        "swig" => "#F3F4F6",
        "systemverilog" => "#DAE1C2",
        "tcl" => "#E4CC98",
        "tcsh" => "#F3F4F6",
        "terra" => "#00004C",
        "tex" => "#3D6117",
        "thrift" => "#F3F4F6",
        "ti-program" => "#A0AA87",
        "tla" => "#F3F4F6",
        "tsql" => "#F3F4F6",
        "tsx" => "#F3F4F6",
        "turing" => "#CF142B",
        "twig" => "#C1D026",
        "txl" => "#F3F4F6",
        "typescript" => "#2B7489",
        "unified-parallel-c" => "#4E3617",
        "unix-assembly" => "#F3F4F6",
        "uno" => "#9933CC",
        "unrealscript" => "#A54C4D",
        "urweb" => "#F3F4F6",
        "v" => "#4F87C4",
        "vala" => "#FBE5CD",
        "vba" => "#867DB1",
        "vbscript" => "#15DCDC",
        "vcl" => "#148AA8",
        "verilog" => "#B2B7F8",
        "vhdl" => "#ADB2CB",
        "vim-script" => "#199F4B",
        "visual-basic-.net" => "#945DB7",
        "volt" => "#1F1F1F",
        "vue" => "#2C3E50",
        "wdl" => "#42F1F4",
        "webassembly" => "#04133B",
        "webidl" => "#F3F4F6",
        "wisp" => "#7582D1",
        "wollok" => "#A23738",
        "x10" => "#4B6BEF",
        "xbase" => "#403A40",
        "xc" => "#99DA07",
        "xojo" => "#F3F4F6",
        "xproc" => "#F3F4F6",
        "xquery" => "#5232E7",
        "xs" => "#F3F4F6",
        "xslt" => "#EB8CEB",
        "xtend" => "#F3F4F6",
        "yacc" => "#4B6C4B",
        "yaml" => "#CB171E",
        "yara" => "#220000",
        "yasnippet" => "#32AB90",
        "zap" => "#0D665E",
        "zeek" => "#F3F4F6",
        "zenscript" => "#00BCD1",
        "zephir" => "#118F9E",
        "zig" => "#EC915C",
        "zil" => "#DC75E5",
        "zimpl" => "#F3F4F6",
    ];

    public function all(): array
    {
        return $this->data;
    }

    public function find($code): string
    {
        return $this->data[$code] ?? static::DEFAULT_COLOUR;
    }
}
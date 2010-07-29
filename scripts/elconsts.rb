IO.foreach("elconsts.txt") {|l|
  p = l.delete("\n\r")
  pn = p.downcase.gsub("elphel_", "").chomp
  #print "  \$#{pn} = elphel_get_P_value(#{p});\n"
  #print "  echo \"#{pn}=\$#{pn}\\n\";\n\n"

  print "\#    \$#{pn} = $_GET['#{pn}'];\n"
  print "\#    if(\$#{pn} != null) elphel_set_P_value(#{p}, \$#{pn});\n\n"

}
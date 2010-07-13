aux_source_directory(cpp SOURCES)
file(GLOB HEADERS cpp/*.hpp)
file(GLOB QTUI ui/*.ui)
file(GLOB QTRESOURCES rc/*.qrc)

qt4_wrap_cpp(mocSOURCES ${HEADERS})
qt4_wrap_ui(UI ${QTUI})
qt4_add_resources(RESOURCES ${QTRESOURCES})

add_executable(elcap ${SOURCES} ${mocSOURCES} ${RESOURCES} ${MATRIXHEADERS} ${UI})
target_link_libraries(elcap ${QT_LIBRARIES})

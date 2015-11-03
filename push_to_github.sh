#!/usr/bin/env /bin/bash
#
# Executar push para repositório github remoto
#
# @author Wanderlei Silva do Carmo <Wander.silva@gmail.com>
# @version 1.0
######################################################################################

REMOTO="https://github.com/w3aewander/WFW-1.0.0-dev"
 
if [[ -n $1 ]]; then
    git add --all && git commit -m "$1" && git push $REMOTO && echo "Sucesso..." 2> /dev/null
else
  echo "Push não executado"
fi

#Fim 

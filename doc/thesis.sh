for REPO in normtax chapter5 chapter6 berkeleygraph normpar;
do
    git clone https://bitbucket.org/robvanderg/$REPO
    cd $REPO
    ./scripts/runAll.sh
    ./scripts/genAll.sh
    cd ..
done


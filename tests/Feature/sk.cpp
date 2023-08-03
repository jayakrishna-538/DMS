#include<bits/stdc++.h>
using namespace std;
vector<int> query(int N,vector<int> A, int Q,vector<vector<int>> queries){
    vector<int> ans;
    for(int i=0;i<queries.size();i++){
        if(queries[i][0]==1){
             A[queries[i][1]-1]=queries[i][2];
        }else if(queries[i][0]==2){
              int max_xor=INT_MIN;
              for(int j=queries[i][1]-1;j<queries[i][2];j++){
                  for(int k=j+1;k<queries[i][2];k++){
                      max_xor=max(max_xor,A[j]^A[k]);
                  }
              }
            ans.push_back(max_xor);

        }
    }
    return ans;
}
int main(){
    return 0;
}